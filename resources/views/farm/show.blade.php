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
    <div class="card table my-5 px-3">
        <div class="mt-3 row">
            <label for="nama_kandang" class="col-sm-3 col-form-label fw-bold">Nama Kandang</label>
            <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="nama_kandang" name="nama_kandang"
                    value="{{ $farm->nama_kandang }}">
            </div>
        </div>
        <div class="mt-3 row">
            <label for="kepala_kandang" class="col-sm-3 col-form-label fw-bold">Kepala Kandang</label>
            <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="kepala_kandang" name="kepala_kandang"
                    value="{{ $farm->kepala_kandang }}">
            </div>
        </div>
        <div class="mt-3 row">
            <label for="status_kandang" class="col-sm-3 col-form-label fw-bold">Status Kandang</label>
            <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext text-capitalize" id="status_kandang" name="status_kandang"
                    value="{{ $farm->status_kandang }}">
            </div>
        </div>
        <div class="mt-3 row">
            <label for="kapasitas_kandang" class="col-sm-3 col-form-label fw-bold">Kapasitas Kandang</label>
            <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext" id="kapasitas_kandang" name="kapasitas_kandang"
                    value="{{ $farm->kapasitas_kandang }}">
            </div>
        </div>
        <div class="mt-3 row">
            <label for="lokasi_kandang" class="col-sm-3 col-form-label fw-bold">Lokasi Kandang</label>
            <div class="col-sm-9">
                <textarea readonly class="form-control-plaintext" id="lokasi_kandang" name="lokasi_kandang">{{ $farm->lokasi_kandang }}</textarea>
            </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <a href="{{ route('farm.index') }}" class="col-1 btn btn-secondary mx-2">Kembali</a>
        <a href="{{ route('farm.edit', $farm->id) }}" class="col-1 btn btn-primary">Edit</a>
    </div>
@endsection
