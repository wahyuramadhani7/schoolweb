<?php

namespace App\Http\Controllers;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = [
            ['id' => 1, 'image' => '/api/placeholder/400/320', 'caption' => 'Gambar 1'], 
            ['id' => 2, 'image' => '/api/placeholder/400/320', 'caption' => 'Gambar 2'],
            ['id' => 3, 'image' => '/api/placeholder/400/320', 'caption' => 'Gambar 3'],
            ['id' => 4, 'image' => '/api/placeholder/400/320', 'caption' => 'Gambar 4'],
            ['id' => 5, 'image' => '/api/placeholder/400/320', 'caption' => 'Gambar 5'],
            ['id' => 6, 'image' => '/api/placeholder/400/320', 'caption' => 'Gambar 6'],
        ];
        
        return view('galeri.index', compact('galeri'));
    }

    public function show($id)
    {
        $galeri = ['id' => $id, 'image' => '/api/placeholder/400/320', 'caption' => 'Gambar '.$id];
        return view('galeri.show', compact('galeri'));
    }
}