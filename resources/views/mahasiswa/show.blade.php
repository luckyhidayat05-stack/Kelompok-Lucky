@extends('layouts.app')

@section('content')
<div class="mb-4">
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left me-1"></i> Kembali
    </a>
</div>

<div class="card shadow-sm" style="max-width: 600px;">
    <div class="card-header bg-primary text-white fw-bold">
        <i class="bi bi-person-circle me-2"></i>Detail Mahasiswa
    </div>
    <div class="card-body">
        @if($mahasiswa)
        <table class="table table-borderless mb-0">
            <tr>
                <th width="130">Nama</th>
                <td>: {{ $mahasiswa->nama }}</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>: {{ $mahasiswa->nim }}</td>
            </tr>
            <tr>
                <th>Jurusan</th>
                <td>: {{ $mahasiswa->jurusan }}</td>
            </tr>
            <tr>
                <th>Angkatan</th>
                <td>: {{ $mahasiswa->angkatan }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>: {{ $mahasiswa->email }}</td>
            </tr>
        </table>

        <div class="mt-3 d-flex gap-2">
            <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning">
                <i class="bi bi-pencil me-1"></i> Edit
            </a>
            <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST"
                  onsubmit="return confirm('Yakin hapus data ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class="bi bi-trash me-1"></i> Hapus
                </button>
            </form>
        </div>
        @else
        <p class="text-muted">Data tidak ditemukan.</p>
        @endif
    </div>
</div>
@endsection
