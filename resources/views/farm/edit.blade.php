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
    {{-- Edit Kandang --}}
    <form action="{{ route('farm.update', $farm->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card table my-5 px-3">
            <div class="mt-3 row">
                <label for="nama_kandang" class="col-sm-3 col-form-label fw-bold" required>Nama Kandang</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama_kandang" name="nama_kandang" value="{{ $farm->nama_kandang }}">
                </div>
            </div>
            <div class="mt-3 row">
                <label for="kepala_kandang" class="col-sm-3 col-form-label fw-bold" required>Kepala Kandang</label>
                <div class="col-sm-9">
                    <select class="form-select" name="kepala_kandang" id="kepala_kandang"
                        value="{{ $farm->kepala_kandang }}">
                        <option disabled>Semua Kepala Kandang</option>
                        <option value="Georgia Anatasya">Georgia Anatasya</option>
                        <option value="Aladdin bin Slamet">Aladdin bin Slamet</option>
                        <option value="Dwina Insani">Dwina Insani</option>
                        <option value="Dimas Nallando Putra">Dimas Nallando Putra</option>
                        <option value="Muhammad Besari">Muhammad Besari</option>
                    </select>
                </div>
            </div>
            <div class="mt-3 row">
                <label for="status_kandang" class="col-sm-3 col-form-label fw-bold" required>Status Kandang</label>
                <div class="col-sm-9">
                    <select class="form-select" id="status_kandang" name="status_kandang"
                        value="{{ $farm->status_kandang }}">
                        <option disabled>Silakan pilih status kandang</option>
                        <option value="panen">Panen</option>
                        <option value="chick in">Chick In</option>
                        <option value="persiapan kandang">Persiapan Kandang</option>
                        <option value="cuci kandang">Cuci Kandang</option>
                        <option value="kosong">Kosong</option>
                    </select>
                </div>
            </div>
            <div class="mt-3 row">
                <label for="kapasitas_kandang" class="col-sm-3 col-form-label fw-bold" required>Kapasitas Kandang</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="kapasitas_kandang" name="kapasitas_kandang" value="{{ $farm->kapasitas_kandang }}">
                </div>
            </div>
            <div class="my-3 row">
                <label for="lokasi_kandang" class="col-sm-3 col-form-label fw-bold" required>Lokasi Kandang</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="lokasi_kandang" name="lokasi_kandang">{{ $farm->lokasi_kandang }}</textarea>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <a href="{{ route('farm.index') }}" class="col-1 btn btn-secondary mx-2">Kembali</a>
            <button type="submit" class="col-1 btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection
