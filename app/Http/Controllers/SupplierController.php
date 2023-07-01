<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(Request $request)
    {
        $category = Supplier::all();
        $data = array();
        foreach($category as $c)
        {
            $item['id'] = $c->id;
            $item['name'] = $c->name;
            $item['email'] = $c->email;
            $item['telp'] = $c->telp;
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

        $client = new Supplier();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->telp = $request->telp;
        $client->save();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data supplier baru',
        ],201);
    }

    public function update(Request $request,$id)
    {
        $cari = Supplier::where('id',$id)->first();
        if($cari)
        {
            $cari->name = $request->name;
            $cari->email = $request->email;
            $cari->telp = $request->telp;
            $cari->save();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil update data supplier',
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Data supplier tidak ditemukan',
            ],404);
        }
    }

    public function delete($id)
    {
        $cari = Supplier::where('id',$id)->first();
        if($cari)
        {
            foreach($cari->puerchase as $p)
            {
                $p->client_id = 0;
                $p->save();
            }

            $hapus = Supplier::where('id',$id)->delete();
            if($hapus)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data supplier',
                ],201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghapus data supplier',
                ],400);
            }
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Data supplier tidak ditemukan',
            ],404);
        }
    }

    public function supplier_list()
    {
        return view('admin.listsupplier');
    }
}
