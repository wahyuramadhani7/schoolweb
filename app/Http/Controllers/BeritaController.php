<?php

namespace App\Http\Controllers;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = [
            [
                'id' => 1,
                'title' => 'Judul Berita 1',
                'content' => 'Isi berita 1...',
                'created_at' => now()->format('Y-m-d')
            ],
            [
                'id' => 2, 
                'title' => 'Judul Berita 2',
                'content' => 'Isi berita 2...',
                'created_at' => now()->format('Y-m-d')
            ],
            // Add more sample news data here
        ];

        return view('berita.index', compact('berita'));
    }

    public function show($id)
    {
        // Retrieve specific news item based on $id
        // For now, just return a placeholder
        $berita = [
            'id' => $id,
            'title' => 'Judul Berita '.$id,
            'content' => 'Isi berita '.$id.'...',
            'created_at' => now()->format('Y-m-d')
        ];

        return view('berita.show', compact('berita'));
    }
}