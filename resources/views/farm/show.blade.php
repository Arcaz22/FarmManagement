@extends('layouts.main')

@section('container')
    <div class="row align-items-center justify-content-around">
        <h1 class="col-4">Farm Management</h1>
        <div class="col">
            <div class="row justify">
                <div class="col">
                    <a href="" class="btn btn-light">Search</a>
                </div>
                <div class="col">
                    <a href="" class="btn btn-light">Filter</a>
                </div>
                <div class="col">
                    {{-- <a href="{{ route('farm.create') }}" class="btn btn-primary" style="border-radius: 30px"><i class="bi bi-plus"></i>Tambah Kandang</a> --}}
                    @include('farm.create')
                </div>
            </div>
        </div>
    </div>

    <ul class="list-group">
        <li class="list-group-item"><strong>Nama Kandang:</strong> {{ $farm->nama_kandang }}</li>
        <li class="list-group-item"><strong>Kepala Kandang:</strong> {{ $farm->kepala_kandang }}</li>
        <li class="list-group-item"><strong>Status Kandang:</strong> {{ $farm->status_kandang }}</li>
        <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
    </ul>

    <p></p>
    <p></p>
    <p></p>
    <a href="{{ route('farm.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
