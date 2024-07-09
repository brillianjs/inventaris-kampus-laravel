<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahData" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahData">Tambah Data Peminjaman</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>



            <!-- Form tambah data -->
            <form method="post" action="{{ url('data-masuk') }}">
                @csrf

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="kd_barang" class="form-label">Kode Barang</label>
                        <select class="form-select" id="kd_barang" name="kd_barang">
                            <option value="1001">1001</option>
                            <option value="1002">1002</option>
                            <option value="1003">1003</option>
                            <option value="1004">1004</option>
                        </select>
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
                        <label for="jml_barang" class="form-label">Jumlah Barang</label>
                        <input type="number" class="form-control" id="jml_barang" name="jml_barang">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
                        <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="tgl_pinjam" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="ket_pinjam" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="ket_pinjam" name="ket_pinjam">
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

<script>
    // Data barang statis
    var barangData = {
        '1001': {
            item_barang: 'Monitor',
            merek_barang: 'Asus'
        },
        '1002': {
            item_barang: 'Kursi',
            merek_barang: 'Olympic'
        },
        '1003': {
            item_barang: 'Mouse',
            merek_barang: 'Logitech'
        },
        '1004': {
            item_barang: 'Item 1004',
            merek_barang: 'Brand 1004'
        }
    };

    $(document).ready(function () {
        $('#kd_barang').change(function () {
            var id = $(this).val();
            if (barangData[id]) {
                $('#item_barang').val(barangData[id].item_barang);
                $('#merek_barang').val(barangData[id].merek_barang);
            } else {
                $('#item_barang').val('');
                $('#merek_barang').val('');
            }
        });
    });
</script>

<!-- Modal Tambah -->