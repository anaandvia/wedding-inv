<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function show($nama)
    {
        // Gunakan $nama untuk mendapatkan profil pengguna dari database
        // Misalnya, ambil data pengguna dengan nama yang sesuai
        // $user = ['Ana', 'tasya', 'Dira'];
        // $nama = ucfirst(strtolower($nama));
        // // Jika pengguna ditemukan, tampilkan profilnya
        // if (in_array($nama, $user)) {
            return view(
                'index', 
                [
                    'nama' => $nama,
                ]
            );
        // }

        // Jika pengguna tidak ditemukan, tampilkan pesan kesalahan
        // return view('index');
    }
}
