@extends('layouts.main')

@section('container')
<div class="container">
    <h1>Farm Management</h1>
    <a href="{{ route('farm.create') }}" class="btn btn-primary mb-2">Tambah Kandang Baru</a>

    <form action="{{ route('farm.search') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search by Nama Kandang">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <form action="{{ route('farm.filter') }}" method="GET" class="mb-3">
        <div class="row">
            <div class="col-md-4 mb-2">
                <label for="status_kandang">Status Kandang:</label>
                <select name="status_kandang" id="status_kandang" class="form-control">
                    <option value="">Semua Status</option>
                    <option value="panen">Panen</option>
                    <option value="chick in">Chick In</option>
                    <option value="persiapan kandang">Persiapan Kandang</option>
                    <option value="cuci kandang">Cuci Kandang</option>
                    <option value="kosong">Kosong</option>
                </select>
            </div>
            <div class="col-md-4 mb-2">
                <label for="kepala_kandang">Kepala Kandang:</label>
                <select name="kepala_kandang" id="kepala_kandang" class="form-control">
                    <option value="">Semua Kepala Kandang</option>
                    <option value="Georgia Anatasya">Georgia Anatasya</option>
                    <option value="Aladdin bin Slamet">Aladdin bin Slamet</option>
                    <option value="Dwina Insani">Dwina Insani</option>
                    <option value="Dimas Nallando Putra">Dimas Nallando Putra</option>
                    <option value="Muhammad Besari">Muhammad Besari</option>
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary mt-4">Filter</button>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Kandang</th>
                <th>Kepala Kandang</th>
                <th>Status Kandang</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($farm as $management)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $management->nama_kandang }}</td>
                <td>{{ $management->kepala_kandang }}</td>
                <td>{{ $management->status_kandang }}</td>
                <td>
                    <a href="{{ route('farm.show', $management->id) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('farm.edit', $management->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('farm.destroy', $management->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus kandang ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection