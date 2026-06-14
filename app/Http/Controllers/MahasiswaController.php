<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Tampilkan semua data mahasiswa.
     * URL: GET /mahasiswa
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswas' => $mahasiswas]);
    }

    /**
     * Tampilkan detail satu mahasiswa.
     * URL: GET /mahasiswa/{id}
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Tampilkan form tambah mahasiswa.
     * URL: GET /mahasiswa/create
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Simpan data mahasiswa baru ke database.
     * URL: POST /mahasiswa
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim'      => 'required|string|unique:mahasiswas,nim|max:20',
            'nama'     => 'required|string|max:100',
            'email'    => 'required|email|unique:mahasiswas,email|max:100',
            'jurusan'  => 'required|string|max:100',
            'angkatan' => 'required|integer|digits:4',
        ]);

        Mahasiswa::create([
            'nim'      => $request->nim,
            'nama'     => $request->nama,
            'email'    => $request->email,
            'jurusan'  => $request->jurusan,
            'angkatan' => $request->angkatan,
        ]);

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    /**
     * Tampilkan form edit mahasiswa.
     * URL: GET /mahasiswa/{id}/edit
     */
    public function edit($id)
    {
        // Hapus baris ini setelah selesai:
        return view('mahasiswa.edit', ['mahasiswa' => null]);
    }

    /**
     * Update data mahasiswa di database.
     * URL: PUT /mahasiswa/{id}
     */
    public function update(Request $request, $id)
    {
        // Hapus baris ini setelah selesai:
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Hapus data mahasiswa dari database.
     * URL: DELETE /mahasiswa/{id}
     */
    public function destroy($id)
    {
        // Hapus baris ini setelah selesai:
        return redirect()->route('mahasiswa.index');
    }
}