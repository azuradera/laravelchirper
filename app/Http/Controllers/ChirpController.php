<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    // Menampilkan daftar chirps
    public function index()
    {
        $chirps = [
            ['id' => 1, 'message' => 'Hello Laravel!'],
            ['id' => 2, 'message' => 'Belajar MVC di Laravel'],
        ];

        return view('welcome', ['chirps' => $chirps]);
    }

    // Menampilkan form tambah chirp
    public function create()
    {
        return view('chirps.create');
    }

    // Menyimpan chirp baru ke database
    public function store(Request $request)
    {
        // Logika simpan data
        return redirect()->route('chirps.index');
    }

    // Menampilkan satu chirp berdasarkan ID
    public function show($id)
    {
        $chirp = ['id' => $id, 'message' => 'Contoh chirp'];
        return view('chirps.show', compact('chirp'));
    }

    // Menampilkan form edit chirp
    public function edit($id)
    {
        $chirp = ['id' => $id, 'message' => 'Data lama'];
        return view('chirps.edit', compact('chirp'));
    }

    // Mengupdate chirp yang sudah ada
    public function update(Request $request, $id)
    {
        // Logika update data
        return redirect()->route('chirps.index');
    }

    // Menghapus chirp
    public function destroy($id)
    {
        // Logika hapus data
        return redirect()->route('chirps.index');
    }
}
