@extends('layouts.app')

@section('content')
<div class="mb-4">
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left me-1"></i> Kembali
    </a>
</div>

<div class="card shadow-sm" style="max-width: 600px;">
    <div class="card-header bg-primary text-white fw-bold">
        <i class="bi bi-plus-circle me-2"></i>Tambah Mahasiswa
    </div>
    <div class="card-body">
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                       value="{{ old('nama') }}" placeholder="Contoh: Budi Santoso">
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">NIM</label>
                <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror"
                       value="{{ old('nim') }}" placeholder="Contoh: 2021001">
                @error('nim')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Jurusan</label>
                <input type="text" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror"
                       value="{{ old('jurusan') }}" placeholder="Contoh: Teknik Informatika">
                @error('jurusan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Angkatan</label>
                <input type="number" name="angkatan" class="form-control @error('angkatan') is-invalid @enderror"
                       value="{{ old('angkatan') }}" placeholder="Contoh: 2021" min="2000" max="2099">
                @error('angkatan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email') }}" placeholder="Contoh: budi@email.com">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">
                <i class="bi bi-save me-1"></i> Simpan
            </button>
        </form>
    </div>
</div>
@endsection
