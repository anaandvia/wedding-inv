<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Undangan;


class TamuController extends Controller
{
    public function show($nama)
    {
        $undangans = Undangan::orderBy('created_at', 'desc')->get();

        return view(
            'index', 
            [
                'nama' => $nama,
                'undangan' => $undangans
            ]
        );
    }
}
