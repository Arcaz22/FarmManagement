@extends('layouts.main')

@section('container')
<div class="container">
    <h1>Tambah Kandang Baru</h1>
    <form action="{{ route('farm.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nama_kandang">Nama Kandang</label>
            <input type="text" class="form-control" id="nama_kandang" name="nama_kandang" required>
        </div>
        <div class="form-group">
            <label for="kepala_kandang">Kepala Kandang</label>
            <input type="text" class="form-control" id="kepala_kandang" name="kepala_kandang" required>
        </div>
        <div class="form-group">
            <label for="status_kandang">Status Kandang</label>
            <input type="text" class="form-control" id="status_kandang" name="status_kandang" required>
        </div>
        <div class="form-group">
            <label for="kapasitas_kandang">Kapasitas Kandang</label>
            <input type="number" class="form-control" id="kapasitas_kandang" name="kapasitas_kandang" required>
        </div>
        <div class="form-group">
            <label for="lokasi_kandang">Lokasi Kandang</label>
            <input type="text" class="form-control" id="lokasi_kandang" name="lokasi_kandang" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('farm.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection