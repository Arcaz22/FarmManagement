@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Kandang</h1>
    <p><strong>Nama Kandang:</strong> {{ $kandang->nama_kandang }}</p>
    <p><strong>Kepala Kandang:</strong> {{ $kandang->kepala_kandang }}</p>
    <p><strong>Status Kandang:</strong> {{ $kandang->status_kandang }}</p>
    <a href="{{ route('farm.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection