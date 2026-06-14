@extends('layouts.app')

@section('content')
<div class="mb-4">
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left me-1"></i> Kembali
    </a>
</div>

<div class="card shadow-sm" style="max-width: 600px;">
    <div class="card-header bg-warning fw-bold">
        <i class="bi bi-pencil me-2"></i>Edit Mahasiswa
    </div>
    <div class="card-body">
        @if($mahasiswa)
        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                       value="{{ old('nama', $mahasiswa->nama) }}">
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">NIM</label>
                <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror"
                       value="{{ old('nim', $mahasiswa->nim) }}">
                @error('nim')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Jurusan</label>
                <input type="text" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror"
                       value="{{ old('jurusan', $mahasiswa->jurusan) }}">
                @error('jurusan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Angkatan</label>
                <input type="number" name="angkatan" class="form-control @error('angkatan') is-invalid @enderror"
                       value="{{ old('angkatan', $mahasiswa->angkatan) }}" min="2000" max="2099">
                @error('angkatan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email', $mahasiswa->email) }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-warning w-100 fw-semibold">
                <i class="bi bi-save me-1"></i> Update Data
            </button>
        </form>
        @else
        <p class="text-muted">Data tidak ditemukan.</p>
        @endif
    </div>
</div>
@endsection
