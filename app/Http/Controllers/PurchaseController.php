<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\PurchaseDetail;
use App\Models\StockHistories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function produklist(Request $request)
    {
        $produk = Product::orderby('id','desc')->get();
        $list = array();
        foreach($produk as $p)
        {
            $item['id'] = $p->id;
            $item['name'] = $p->name;
            $item['modal'] = $p->modal;
            $list[] = $item;
        }

        return response()->json([
            'data' => $list,
        ],200);
    }

    public function transaction(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'supplier_id' => 'required',
            'grandtotal' => 'required',
            'amount' => 'required',
            'payment_method' => 'required',
            'status' => 'required',
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $reff = $this->getNumberOrder();
        $cek_reff = Purchase::where('reff',$reff)->count();
        // cek no reff tidak boleh sama
        if($cek_reff == 0 && $request->grandtotal > 0)
        {
            $pembelian = new Purchase();
            $pembelian->user_id = Auth::user()->id;
            $pembelian->supplier_id = $request->supplier_id;
            $pembelian->reff = $reff;
            $pembelian->grandtotal = $request->grandtotal;
            $pembelian->amount = $request->amount;
            $pembelian->payment_method = $request->payment_method;
            $pembelian->status = $request->status;
            $pembelian->save();

            $data = $request['details'];
            foreach($data as $key => $value)
            {
                $detil_beli = new PurchaseDetail();
                $detil_beli->purchase_id = $pembelian->id;
                $detil_beli->product_id = $value['product_id'];
                $detil_beli->price = $value['price'];
                $detil_beli->qty = $value['qty'];
                $detil_beli->total = $value['total'];
                $detil_beli->save();

                if($pembelian->status == 'selesai' && $pembelian->amount >= $pembelian->grandtotal)
                {
                    $produk = Product::where('id',$value['id'])->first();
                    if($produk)
                    {
                        $produk->stock = $produk->stock + $value['qty'];
                        $produk->save();

                        $history = new StockHistories();
                        $history->user_id = Auth::user()->id;
                        $history->product_id = $value['product_id'];
                        $history->qty = $value['qty'];
                        $history->live_stock = $produk->stock;
                        $history->status = 'penambahan';
                        $history->keterangan = 'Penambahan pembelian stock produk '.$pembelian->reff.' oleh '.Auth::user()->firstname.' '.Auth::user()->lastname;
                        $history->save();
                    }
                }
            }

            $data = array();
            foreach($pembelian->detail as $d)
            {
                $item['id'] = $d->id;
                $item['product_id'] = $d->product_id;
                $item['product_name'] = $d->product->name;
                $item['price'] = $d->price;
                $item['qty'] = $d->qty;
                $item['total'] = $d->total;
                $data[] = $item;
            }

            $response = [
                'id' => $pembelian->id,
                'user_id' => $pembelian->user_id,
                'user_name' => $pembelian->user->firstname.' '.$pembelian->user->lastname,
                'supplier_id' => $pembelian->supplier_id,
                'supplier_name' => $pembelian->supplier->name,
                'reff' => $pembelian->reff,
                'grandtotal' => $pembelian->grandtotal,
                'amount' => $pembelian->amount,
                'payment_method' => $pembelian->payment_method,
                'status' => $pembelian->status,
                'details' => $data,
            ];

            return response()->json($response,200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'No reff sudah terdaftar silahkan cek kembali no ref anda',
            ],400);
        }
    }

    public function purchase_list(Request $request)
    {
        $pembelian = Purchase::where(function ($q) use ($request) {
            if($request->serach != null)
            {
                return $q->where('reff','LIKE','%'.$request->search.'%');
            }
        })->orderby('id','desc')->get();
        $data = array();
        foreach($pembelian as $p)
        {
            $details_data = array();
            foreach($p->details as $d)
            {
                $component['id'] = $d->id;
                $component['product_id'] = $d->product_id;
                $component['product_name'] = $d->product->name;
                $component['price'] = $d->price;
                $component['qty'] = $d->qty;
                $component['total'] = $d->total;
                $details_data[] = $component;
            }

            $item['id'] = $p->id;
            $item['user_id'] = $p->user_id;
            $item['user_name'] = $p->user->firstname.' '.$p->user->lastname;
            $item['supplier_id'] = $p->supplier_id;
            $item['supplier_name'] = $p->supplier->name;
            $item['reff'] = $p->reff;
            $item['grandtotal'] = $p->grandtotal;
            $item['amount'] = $p->amount;
            $item['payment_method'] = $p->paymeny_method;
            $item['status'] = $p->status;
            $item['details'] = $details_data;
            $data[] = $item;
        }

        return response()->json([
            'data' => $data,
        ],200);
    }

    public function getNumberOrder()
    {
        $last = DB::table('purchases')->latest('id')->first();

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
