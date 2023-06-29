<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $my_profile = [
            'id' => Auth::user()->id,
            'firstname' => Auth::user()->firstname,
            'lastname' => Auth::user()->lastname,
            'email' => Auth::user()->email,
            'tanggal_lahir' => Auth::user()->tgl_lahir,
            'jenis_kelamin' => Auth::user()->jenis_kelamin
        ];

        return response()->json($my_profile,200);
    }

    public function update(Request $request)
    {
        $cari = User::where('id',Auth::user()->id)->first();
        if($cari)
        {
            $cari->firstname = $request->firstname != null ? $request->firstname : $cari->firstname;
            $cari->lastname = $request->lastname != null ? $request->lastname : $cari->lastname;
            $cari->email = $request->email != null ? $request->email : $cari->email;
            $cari->tgl_lahir = $request->tanggal_lahir != null ? $request->tanggal_lahir : $cari->tgl_lahir;
            $cari->jenis_kelamin = $request->jenis_kelamin != null ? $request->jenis_kelamin : $cari->jenis_kelamin;
            $request->password != null ? $cari->password = Hash::make($cari->password) : true;
            $cari->save();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil mengupdate profile anda',
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Data pengguna tidak ditemukan',
            ],400);
        }
    }
}
