<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\StockHistories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(Request $request)
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
        })->orderby('id','desc')->get();
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
        ],200);
    }

    public function add_product(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'name'   => 'required',
            'modal' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'satuan' => 'required',
            'is_jual' => 'required',
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $produk = new Product();
        $produk->category_id = $request->category_id;
        $produk->name = $request->name;
        $produk->modal = $request->modal;
        $produk->price = $request->price;
        if($request->hasFile('gambar')){
            $image = $request->file('gambar');
            $path = $image->store('public/images');

            $produk->gambar = $path;
        }
        $produk->desc = $request->desc;
        $produk->stock = $request->stock;
        $produk->satuan = $request->satuan;
        $produk->is_active = true;
        $produk->is_jual = $request->is_jual;
        $produk->save();

        $history = new StockHistories();
        $history->user_id = Auth::user()->id;
        $history->product_id = $produk->id;
        $history->qty = $produk->stock;
        $history->live_stock = $produk->stock;
        $history->status = 'penambahan';
        $history->keterangan = 'Penambahan produk stock awal sebesar '.$produk->stock.' oleh '.Auth::user()->firstname.' '.Auth::user()->lastname;
        $history->save();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data produk',
        ],201);
    }

    public function detail($id)
    {
        $cari = Product::where('id',$id)->first();
        if($cari)
        {
            $data = [
                'id' => $cari->id,
                'category_id' => $cari->category_id,
                'category_name' => $cari->kategori->name ?? '',
                'name' => $cari->name,
                'modal' => $cari->modal,
                'price' => $cari->price,
                'gambar' => $cari->gambar,
                'desc' => $cari->desc,
                'stock' => $cari->stock,
                'satuan' => $cari->satuan,
                'is_active' => $cari->is_active,
                'is_jual' => $cari->is_jual,
            ];

            return response()->json([
                'data' => $data,
            ],200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Data produk tidak ditemukan',
            ],404);
        }
    }

    public function update(Request $request,$id)
    {
        $cari = Product::where('id',$id)->first();
        if($cari)
        {
            $cari->name = $request->name == '' ? $cari->name : $request->name;
            $cari->modal = $request->modal == 0 ? $cari->modal : $request->modal;
            $cari->price = $request->price == 0 ? $cari->price : $request->price;
            if ($request->hasFile('gambar')) {
                $image = $request->file('gambar');

                if($cari->gambar != null)
                {
                    Storage::delete($cari->gambar);
                    $cari->gambar = null;
                }

                // Upload gambar baru ke penyimpanan lokal
                $newImagePath = $image->store('public/images');

                $cari->gambar = $newImagePath;
            }
            $cari->desc = $request->desc == null ? $cari->desc : $request->desc;
            $cari->is_active = $request->is_active == '' ? $cari->is_active : $request->is_active;
            $cari->is_jual = $request->is_jual == '' ? $cari->is_jual : $request->is_jual;
            $cari->save();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil update data produk',
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Data produk tidak ditemukan',
            ],404);
        }
    }

    public function delete($id)
    {
        $cari = Product::where('id',$id)->first();
        if($cari)
        {
            // Hapus History Stock Produk
            $childModels = StockHistories::where('product_id', $id)->get();

            $childModels->each(function ($childModel) {
                $childModel->delete();
            });

            $hapus = Product::where('id',$id)->delete();

            if($hapus)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data produk',
                ],200);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Terjadi kesalahan saat hapus data produk',
                ],400);
            }
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Data produk tidak ditemukan',
            ],404);
        }
    }

    public function view_product()
    {
        return view('admin.listproduk');
    }
}
