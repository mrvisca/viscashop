<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AutentikasiController extends Controller
{
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = User::where('email', $fields['email'])->first();

        if ($user == null) {
            return response([
                'message' => 'Akun anda belum terdaftar di sistem kami'
            ], 401);
        }

        if($user->email_verified_at == null)
        {
            return response()->json([
                'message' => 'Gagal login, akun belum diverifikasi',
                'email_verified_at' => $user->email_verified_at,
            ],401);
        }

        $checkPass = User::where("password", "!=", Hash::check($fields['password'], $user->password))->first();

        if ($checkPass == null) {
            return response([
                'message' => 'Password anda Salah'
            ], 401);
        }

        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Gabungan antara email dan password salah'
            ], 401);
        }

        $tokenResult = $user->createToken('Access Token');
        $token = $tokenResult->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Login Berhasil, Selamat datang admin '.$user->firstname.' '.$user->lastname,
            'id' => $user->id,
            'role_id' => $user->role_id,
            'role_name' => $user->role->name ?? '',
            'bisnis_id' => $user->bisnis_id,
            'bisnis_name' => $user->bisnis->name ?? '',
            'cabang_id' => $user->cabang_id,
            'cabang_name' => $user->cabang->name ?? '',
            'name' => $user->fullname,
            'email' => $user->email,
            'token' => $token,
        ],201);
    }

    public function register(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'firstname'   => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'password' => 'required',
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $pengguna = new User();
        $pengguna->firstname = $request->firstname;
        $pengguna->lastname = $request->lastname;
        $pengguna->email = $request->email;
        $pengguna->tgl_lahir = $request->tanggal_lahir;
        $pengguna->jenis_kelamin = $request->jenis_kelamin;
        $pengguna->password = Hash::make($request->password);
        $pengguna->email_verified_at = date('Y-m-d H:i:s');
        $pengguna->save();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil mendaftarkan akun, untuk memulai aplikasi silahkan login',
        ],201);
    }

    public function halaman_login()
    {
        return view('login');
    }

    public function halaman_registrasi()
    {
        return view('register');
    }
}
