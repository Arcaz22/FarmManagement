@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<button type="button" class="dropdown-item" href="{{ route('farm.edit', $management->id) }}" data-bs-toggle="modal"
    data-bs-target="#ubahKandang">Edit</button>
{{-- Edit Data --}}
<div class="modal fade" id="ubahKandang" tabindex="-1" aria-labelledby="updateData" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h1 class="modal-title fs-3" id="updateData">Edit</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('farm.update', $management->id) }}" method="post">
                <div class="modal-body py-0">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="fw-bold mb-2" for="nama_kandang">Nama Kandang</label>
                        <input type="text" class="mb-3 form-control" id="nama_kandang" name="nama_kandang"
                            value="{{ $management->nama_kandang }}" required>
                    </div>
                    <div class="form-group">
                        <label class="fw-bold mb-2" for="kepala_kandang">Kepala Kandang</label>
                        <input type="text" class="mb-3 form-control" id="kepala_kandang" name="kepala_kandang"
                            value="{{ $management->kepala_kandang }}" required>
                    </div>
                    <div class="form-group">
                        <label class="fw-bold mb-2" for="status_kandang">Status Kandang</label>
                        <select class="form-select mb-3" id="status_kandang" name="status_kandang"
                            value="{{ $management->status_kandang }}">
                            <option selected disabled>Silakan pilih status kandang</option>
                            <option value="panen">Panen</option>
                            <option value="chick in">Chick In</option>
                            <option value="persiapan kandang">Persiapan Kandang</option>
                            <option value="cuci kandang">Cuci Kandang</option>
                            <option value="kosong">Kosong</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="fw-bold mb-2" for="kapasitas_kandang">Kapasitas Kandang</label>
                        <input type="text" class="mb-3 form-control" id="kapasitas_kandang" name="kapasitas_kandang"
                            value="{{ $management->kapasitas_kandang }}" required>
                    </div>
                    <div class="form-group">
                        <label class="fw-bold mb-2" for="lokasi_kandang">Lokasi Kandang</label>
                        <textarea type="text" class="mb-3 form-control" id="lokasi_kandang" name="lokasi_kandang"
                            required>{{ $management->lokasi_kandang }}</textarea>
                    </div>
                </div>
                <div class="modal-footer border-top-0">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>