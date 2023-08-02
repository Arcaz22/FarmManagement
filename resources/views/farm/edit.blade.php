@extends('layouts.main')

@section('container')
<div class="container">
    <h1>Edit Kandang</h1>
    <form action="{{ route('farm.update', $kandang->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_kandang">Nama Kandang</label>
            <input type="text" class="form-control" id="nama_kandang" name="nama_kandang"
                value="{{ $kandang->nama_kandang }}" required>
        </div>
        <div class="form-group">
            <label for="kepala_kandang">Kepala Kandang</label>
            <input type="text" class="form-control" id="kepala_kandang" name="kepala_kandang"
                value="{{ $kandang->kepala_kandang }}" required>
        </div>
        <div class="form-group">
            <label for="status_kandang">Status Kandang</label>
            <input type="text" class="form-control" id="status_kandang" name="status_kandang"
                value="{{ $kandang->status_kandang }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('farm.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection