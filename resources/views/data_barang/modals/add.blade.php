<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahData" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahData">Tambah Data Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Form tambah data -->
            <form method="post" action="{{ url('data-barang') }}">
                @csrf

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode Barang</label>
                        <input type="number" class="form-control" id="kd_barang" name="kd_barang">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="item_barang" class="form-label">Item Barang</label>
                        <input type="text" class="form-control" id="item_barang" name="item_barang">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="merek_barang" class="form-label">Merek Barang</label>
                        <input type="text" class="form-control" id="merek_barang" name="merek_barang">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="jumlah" class="form-label">Harga Barang</label>
                        <input type="number" class="form-control" id="hrg_barang" name="hrg_barang">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="sts_barang" class="form-label">Status Barang</label>
                        <select class="form-select" id="sts_barang" name="sts_barang">
                            <!-- <option>Pilih Kondisi Barang</option> -->
                            <option value="Baik">Baik</option>
                            <option value="Rusak ringan">Rusak Ringan</option>
                            <option value="Rusak sedang">Rusak Sedang</option>
                            <option value="Disimpan">Disimpan</option>
                        </select>
                    </div>

                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
            </form>
        </div>
        </form>
    </div>
</div>
</div>
<!-- Modal Tambah -->