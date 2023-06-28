<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $category = Category::all();
        $data = array();
        foreach($category as $c)
        {
            $item['id'] = $c->id;
            $item['name'] = $c->name;
            $item['desc'] = $c->desc;
            $data[] = $item;
        }

        return response()->json([
            'data' => $data,
            'totalrecord' => $category->count(),
        ],200);
    }

    public function tambah(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'name'   => 'required'
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $kategori = new Category();
        $kategori->name = $request->name;
        $kategori->desc = $request->desc;
        $kategori->save();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan kategori baru',
        ],201);
    }

    public function update(Request $request,$id)
    {
        $cari = Category::where('id',$id)->first();
        if($cari)
        {
            $cari->name = $request->name;
            $cari->desc = $request->desc;
            $cari->save();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil update data kategori produk',
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Data kategori tidak ditemukan',
            ],404);
        }
    }

    public function delete($id)
    {
        $cari = Category::where('id',$id)->first();
        if($cari)
        {
            foreach($cari->produk as $p)
            {
                $p->category_id = 0;
                $p->save();
            }

            $hapus = Category::where('id',$id)->delete();
            if($hapus)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data kategori',
                ],201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghapus data kategori',
                ],400);
            }
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Data kategori tidak ditemukan',
            ],404);
        }
    }
}
