<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak.index');
    }

    public function store(Request $request)
    {
        $kontak = new Kontak();
        $kontak->nama = $request->nama;
        $kontak->email = $request->email;
        $kontak->pesan = $request->pesan;
        $kontak->save();

        return redirect()->route('kontak.index')->with('success', 'Pesan Anda telah dikirim.');
    }
}