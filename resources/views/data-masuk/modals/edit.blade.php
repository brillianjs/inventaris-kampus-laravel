<div class="modal fade" id="modalEditData{{ $row->kd_barang }}" tabindex="-1" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex">
                    <h5 class="modal-title" id="editModalLabel">Edit Data Barang Masuk</h5>
                    <p class="invisible">
                        {{ $row->kd_barang }}
                    </p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post" action="{{ route('edit-data-masuk', $row->kd_barang) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="edit-kode" class="form-label">Kode Barang</label>
                        <input type="text" disabled value="{{ $row->kd_barang }}" class="form-control" id="edit_kode"
                            name="kode">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="edit-item_barang" class="form-label">Item Barang</label>
                        <input type="text" value="{{ $row->item_barang }}" class="form-control" id="edit_item_barang"
                            name="item_barang">
                        <div class="mb-3 mt-3">
                            <label for="edit-item_barang" class="form-label">Nama Barang</label>
                            <input type="text" value="{{ $row->merek_barang }}" class="form-control"
                                id="edit_merek_barang" name="merek_barang">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="edit-jumlah_barang" class="form-label">Harga
                                Barang</label>
                            <input type="number" value="{{ $row->jml_barang }}" class="form-control"
                                id="edit_jumlah_barang" name="jml_barang">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="edit-harga_barang" class="form-label">Harga
                                Barang</label>
                            <input type="number" value="{{ $row->hrg_barang }}" class="form-control"
                                id="edit_harga_barang" name="hrg_barang">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="edit-sts_barang" class="form-label">Status
                                Barang</label>
                            <select class="form-select" id="edit_sts_barang" name="sts_barang">
                                <option value="{{ $row->sts_barang }}">{{ $row->sts_barang }}</option>
                                <option value="Baru">Baru</option>
                                <option value="Bekas">Bekas</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
            </form>
        </div>
    </div>
</div>