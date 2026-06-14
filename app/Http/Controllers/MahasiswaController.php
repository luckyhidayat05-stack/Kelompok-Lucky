<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // =========================================================
    // 👤 BAGIAN 1 & 2 — READ (index & show)
    // Dikerjakan oleh: (Nama 2)
    // =========================================================

    /**
     * Tampilkan semua data mahasiswa.
     * URL: GET /mahasiswa
     */
    public function index()
    {
        // TODO: Ambil semua data mahasiswa dari database
        // Gunakan: Mahasiswa::all() atau Mahasiswa::paginate(10)
        // Kirim ke view: resources/views/mahasiswa/index.blade.php

        // Hapus baris ini setelah selesai:
        return view('mahasiswa.index', ['mahasiswas' => []]);
    }

    /**
     * Tampilkan detail satu mahasiswa.
     * URL: GET /mahasiswa/{id}
     */
    public function show($id)
    {
        // TODO: Cari mahasiswa berdasarkan $id
        // Gunakan: Mahasiswa::findOrFail($id)
        // Kirim ke view: resources/views/mahasiswa/show.blade.php

        // Hapus baris ini setelah selesai:
        return view('mahasiswa.show', ['mahasiswa' => null]);
    }

    // =========================================================
    // ➕ BAGIAN 2 — CREATE (create & store)
    // Dikerjakan oleh: (Nama 1)
    // =========================================================

    /**
     * Tampilkan form tambah mahasiswa.
     * URL: GET /mahasiswa/create
     */
    public function create()
    {
        // TODO: Tampilkan halaman form tambah mahasiswa
        // Return view: resources/views/mahasiswa/create.blade.php

        // Hapus baris ini setelah selesai:
        return view('mahasiswa.create');
    }

    /**
     * Simpan data mahasiswa baru ke database.
     * URL: POST /mahasiswa
     */
    public function store(Request $request)
    {
        // TODO: Validasi input dari form
        // Field yang wajib: nama, nim, jurusan, angkatan, email
        // Gunakan $request->validate([...])

        // TODO: Simpan data ke database
        // Gunakan: Mahasiswa::create([...])

        // TODO: Redirect ke halaman index dengan pesan sukses
        // Gunakan: return redirect()->route('mahasiswa.index')->with('success', '...')

        // Hapus baris ini setelah selesai:
        return redirect()->route('mahasiswa.index');
    }

    // =========================================================
    // ✏️ BAGIAN 3 — UPDATE (edit & update)
    // Dikerjakan oleh: (Nama 3)
    // =========================================================

    /**
     * Tampilkan form edit mahasiswa.
     * URL: GET /mahasiswa/{id}/edit
     */
    public function edit($id)
    {
        // TODO: Cari mahasiswa berdasarkan $id
        // Gunakan: Mahasiswa::findOrFail($id)
        // Kirim ke view: resources/views/mahasiswa/edit.blade.php

        // Hapus baris ini setelah selesai:
        return view('mahasiswa.edit', ['mahasiswa' => null]);
    }

    /**
     * Update data mahasiswa di database.
     * URL: PUT /mahasiswa/{id}
     */
    public function update(Request $request, $id)
    {
        // TODO: Validasi input dari form
        // Field yang wajib: nama, nim, jurusan, angkatan, email

        // TODO: Cari mahasiswa berdasarkan $id lalu update
        // Gunakan: $mahasiswa->update([...])

        // TODO: Redirect ke halaman show/index dengan pesan sukses

        // Hapus baris ini setelah selesai:
        return redirect()->route('mahasiswa.index');
    }

    // =========================================================
    // 🗑️ BAGIAN 4 — DELETE (destroy)
    // Dikerjakan oleh: (Nama 4)
    // =========================================================

    /**
     * Hapus data mahasiswa dari database.
     * URL: DELETE /mahasiswa/{id}
     */
    public function destroy($id)
    {
        // TODO: Cari mahasiswa berdasarkan $id
        // Gunakan: Mahasiswa::findOrFail($id)

        // TODO: Hapus data
        // Gunakan: $mahasiswa->delete()

        // TODO: Redirect ke halaman index dengan pesan sukses

        // Hapus baris ini setelah selesai:
        return redirect()->route('mahasiswa.index');
    }
}
