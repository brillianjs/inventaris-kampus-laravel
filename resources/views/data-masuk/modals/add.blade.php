<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahData" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahData">Tambah Data Barang Masuk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>



            <!-- Form tambah data -->
            <form method="post" action="{{ url('data-masuk') }}">
                @csrf

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode Barang</label>
                        <input type="string" class="form-control" id="kd_barang" name="kd_barang" value="">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="item_barang" class="form-label">Jenis Item Barang</label>
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
                        <label for="hrg_barang" class="form-label">Harga Barang</label>
                        <input type="number" class="form-control" id="hrg_barang" name="hrg_barang">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="sts_barang" class="form-label">Status Barang</label>
                        <select class="form-select" id="sts_barang" name="sts_barang">
                            <option value="Baru">Baru</option>
                            <option value="Bekas">Bekas</option>
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
<script>
    function generateRandomValue(length) {
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }

    // Memanggil fungsi generateRandomValue dengan panjang yang diinginkan, misalnya 6
    var randomValue = generateRandomValue(8);

    // Menggunakan DOM untuk menemukan input dengan id 'kd_barang' dan mengatur nilainya
    document.getElementById('kd_barang').value = randomValue;

</script>
</div>
<!-- Modal Tambah -->