@extends('layouts.main')

@section('container')
    <div class="row align-items-center mb-3">
        <a href="{{ route('farm.index') }}" class="col-1 btn btn-light"><i class="bi bi-arrow-left"></i></a>
        <h1 class="col">Farm Management</h1>
    </div>
    <div class="row align-items-center mb-3">
        <a href="" class="col-2 btn btn-primary mx-3">Informasi Kandang</a>
        <a href="" class="col-2 btn btn-light mx-3">Report</a>
    </div>
    {{-- Informasi Kandang --}}
    <div class="card table mb-5">
        <div class="row">
            <div class="col-3 fw-bold">
                <p class="px-3 mt-3">Nama Kandang</p>
                <p class="px-3 mt-3">Kepala Kandang</p>
                <p class="px-3 mt-3">Status Kandang</p>
                <p class="px-3 mt-3">Kapasitas Kandang</p>
                <p class="px-3 mt-3">Lokasi Kandang</p>
            </div>
            <div class="col">
                <p class="px-3 mt-3">{{ $farm->nama_kandang }}</p>
                <p class="px-3 mt-3">{{ $farm->kepala_kandang }}</p>
                <p class="px-3 mt-3 text-capitalize">{{ $farm->status_kandang }}</p>
                <p class="px-3 mt-3">{{ $farm->kapasitas_kandang }}</p>
                <p class="px-3 mt-3">{{ $farm->lokasi_kandang }}</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <a href="{{ route('farm.index') }}" class="col-1 btn btn-secondary mx-2">Kembali</a>
        <a href="{{ route('farm.edit', $farm->id) }}" class="col-1 btn btn-primary">Edit</a>
    </div>
@endsection
