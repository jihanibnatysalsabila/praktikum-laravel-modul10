<?php

namespace App\Http\Controllers;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Jihan Ibnaty Salsabila';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}