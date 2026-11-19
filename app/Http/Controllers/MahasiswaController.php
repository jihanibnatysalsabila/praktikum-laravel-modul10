<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'Andi',
            'Budi',
            'Siti'
        ];

        return view('pages.mahasiswa', [
            'mahasiswa' => $mahasiswa
        ]);
    }
}
