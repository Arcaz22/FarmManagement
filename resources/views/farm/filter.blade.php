<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#filter">Filter</button>
{{-- Filter Data --}}
<div class="modal fade" id="filter" tabindex="-1" aria-labelledby="filterData" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h1 class="modal-title fs-3" id="filterData">Filter</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('farm.filter') }}" method="GET">
                <div class="modal-body py-0">
                    @csrf
                    <div class="form-group">
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
                    <div class="form-group">
                        <label class="fw-bold mb-2" for="status_kandang">Status Kandang</label>
                        <select class="form-select mb-3" id="status_kandang" name="status_kandang">
                            <option selected disabled>Silakan pilih status kandang</option>
                            <option value="panen">Panen</option>
                            <option value="chick in">Chick In</option>
                            <option value="persiapan kandang">Persiapan Kandang</option>
                            <option value="cuci kandang">Cuci Kandang</option>
                            <option value="kosong">Kosong</option>
                        </select>
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
