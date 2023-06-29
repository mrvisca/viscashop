<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Product;
use App\Models\StockHistories;
use App\Models\TransactionDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function list_produk(Request $request)
    {
        $produk = Product::where(function ($q) use ($request) {
            if($request->category_id != null)
            {
                return $q->where('category_id',$request->category_id);
            }
        })->where(function ($q) use ($request) {
            if($request->search != null)
            {
                return $q->where('name','LIKE','%'.$request->search.'%');
            }
        })->where('is_jual',true)->orderby('id','desc')->get();
        $list = array();
        foreach($produk as $p)
        {
            $item['id'] = $p->id;
            $item['category_id'] = $p->category_id;
            $item['category_name'] = $p->kategori->name ?? '';
            $item['name'] = $p->name;
            $item['modal'] = $p->modal;
            $item['price'] = $p->price;
            $item['desc'] = $p->desc;
            $item['gambar'] = $p->gambar;
            $item['stock'] = $p->stock;
            $item['satuan'] = $p->satuan;
            $item['is_active'] = $p->is_active;
            $item['is_jual'] = $p->is_jual;
            $list[] = $item;
        }

        return response()->json([
            'data' => $list,
            'totalrecord' => $produk->total(),
        ],200);
    }

    public function transaction(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'client_id' => 'required',
            'grandtotal' => 'required',
            'amount' => 'required',
            'payment_method' => 'required',
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $reff = $this->getNumberOrder();
        $cek_reff = Transaction::where('reff',$reff)->count();
        // cek no reff tidak boleh sama
        if($cek_reff == 0 && $request->grandtotal > 0)
        {
            $transaksi = new Transaction();
            $transaksi->user_id = Auth::user()->id;
            $transaksi->client_id = $request->client_id;
            $transaksi->reff = $reff;
            $transaksi->grandtotal = $request->grandtotal;
            $transaksi->amount = $request->amount;
            $transaksi->payment_method = $request->payment_method;
            $transaksi->save();

            $data = $request['details'];
            foreach($data as $key => $value)
            {
                $trans_item = new TransactionDetails();
                $trans_item->transaction_id = $transaksi->id;
                $trans_item->product_id = $value['product_id'];
                $trans_item->price = $value['price'];
                $trans_item->qty = $value['qty'];
                $trans_item->total = $value['total'];
                $trans_item->save();

                if($transaksi->amount >= $transaksi->grandtotal)
                {
                    $produk = Product::where('id',$value['id'])->first();
                    if($produk)
                    {
                        $produk->stock = $produk->stock - $value['qty'];
                        $produk->save();

                        $history = new StockHistories();
                        $history->user_id = Auth::user()->id;
                        $history->product_id = $value['product_id'];
                        $history->qty = $value['qty'];
                        $history->live_stock = $produk->stock;
                        $history->status = 'pengurangan';
                        $history->keterangan = 'Pengurangan stock produk dari penjualan '.$transaksi->reff.' oleh '.Auth::user()->firstname.' '.Auth::user()->lastname;
                        $history->save();
                    }
                }
            }

            $details_data = array();
            foreach($transaksi->details as $d)
            {
                $item['id'] = $d->id;
                $item['product_id'] = $d->product_id;
                $item['product_name'] = $d->product->name;
                $item['price'] = $d->price;
                $item['qty'] = $d->qty;
                $item['total'] = $d->total;
                $details_data[] = $item;
            }

            $response = [
                'id' => $transaksi->id,
                'user_id' => $transaksi->user_id,
                'user_name' => $transaksi->user->firstname.' '.$transaksi->user->lastname,
                'client_id' => $transaksi->client_id,
                'client_name' => $transaksi->pelanggan->name,
                'reff' => $transaksi->reff,
                'grandtotal' => $transaksi->grandtotal,
                'amount' => $transaksi->amount,
                'payment_method' => $transaksi->payment_method,
                'details' => $details_data,
            ];

            return response()->json([
                'success' => true,
                'message' => 'Transaksi Penjualan berhasil dilakukan',
                'data' => $response,
            ],200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'No reff sudah terdaftar silahkan cek kembali no ref anda',
            ],400);
        }
    }

    public function transaksi_penjualan(Request $request)
    {
        $transaksi = Transaction::where(function ($q) use ($request) {
            if($request->serach != null)
            {
                return $q->where('reff','LIKE','%'.$request->search.'%');
            }
        })->orderby('id','desc')->get();
        $data = array();
        foreach($transaksi as $t)
        {
            $details_data = array();
            foreach($t->details as $d)
            {
                $component['id'] = $d->id;
                $component['product_id'] = $d->product_id;
                $component['product_name'] = $d->product->name;
                $component['price'] = $d->price;
                $component['qty'] = $d->qty;
                $component['total'] = $d->total;
                $details_data[] = $component;
            }

            $item['id'] = $t->id;
            $item['user_id'] = $t->user_id;
            $item['user_name'] = $t->user->firstname.' '.$t->user->lastname;
            $item['client_id'] = $t->client_id;
            $item['client_name'] = $t->pelanggan->name;
            $item['reff'] = $t->reff;
            $item['grandtotal'] = $t->grandtotal;
            $item['amount'] = $t->amount;
            $item['payment_method'] = $t->paymeny_method;
            $item['details'] = $details_data;
            $data[] = $item;
        }

        return response()->json([
            'data' => $data,
        ],200);
    }

    public function getNumberOrder()
    {
        $last = DB::table('transactions')->latest('id')->first();

        if ($last) {
            $item = $last->reff;
            $nwMsg = explode("_", $item);
            $inMsg = $nwMsg[1] + 1;
            $code = $nwMsg[0] . '_' . $inMsg;
        } else {
            $code = 'SL_2221';
        }
        return $code;
    }
}
