@extends('layouts.main')

@section('container')
<div class="container">
    <h1>Detail Kandang</h1>
    <p><strong>Nama Kandang:</strong> {{ $farm->nama_kandang }}</p>
    <p><strong>Kepala Kandang:</strong> {{ $farm->kepala_kandang }}</p>
    <p><strong>Status Kandang:</strong> {{ $farm->status_kandang }}</p>
    <a href="{{ route('farm.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection