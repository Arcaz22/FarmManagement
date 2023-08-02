<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahKandang">Tambah
    Kandang</button>
{{-- Tambah Data --}}
<div class="modal fade" id="tambahKandang" tabindex="-1" aria-labelledby="createData" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="createData">Tambah Kandang</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Silakan pilih status kandang</option>
                            @foreach ($collection as $item)
                                <option value="">One</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
