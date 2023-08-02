@extends('layouts.main')

@section('container')
<div class="container">
    <h1>Farm Management</h1>
    <a href="{{ route('farm.create') }}" class="btn btn-primary mb-2">Tambah Kandang Baru</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Kandang</th>
                <th>Kepala Kandang</th>
                <th>Status Kandang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($farm as $management)
            <tr>
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