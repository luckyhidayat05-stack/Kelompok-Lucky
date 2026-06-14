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

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update data mahasiswa di database.
     * URL: PUT /mahasiswa/{id}
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'nim' => 'required|string|max:20|unique:mahasiswas,nim,' . $id,
            'jurusan' => 'required|string|max:100',
            'angkatan' => 'required|numeric',
            'email' => 'required|email|unique:mahasiswas,email,' . $id,
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
            'angkatan' => $request->angkatan,
            'email' => $request->email,
        ]);

        return redirect()
            ->route('mahasiswa.index')
            ->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Cari data mahasiswa berdasarkan id
        $mahasiswa = Mahasiswa::findOrFail($id);

        // Hapus data
        $mahasiswa->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
