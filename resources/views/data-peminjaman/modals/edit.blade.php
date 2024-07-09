<div class="modal fade" id="modalEditData" tabindex="-1" aria-labelledby="modalEditData" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahData">Edit Data Peminjaman</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>



            <!-- Form tambah data -->
            <form method="post" action="{{ url('data-peminjaman') }}">
                @csrf

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="id_barang" class="form-label">Nama Barang</label>
                        <select class="form-select" id="id_barang" name="id_barang" required>
                            @foreach ($dataBarangList as $row)
                                <option value="{{$row->id}}">{{$row->item_barang}} | {{$row->merek_barang}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="jml_barang" class="form-label">Jumlah Barang</label>
                        <input type="number" class="form-control" id="jml_barang" name="jml_barang" required>
                        @if (isset($row))

                            <small id="emailHelp" class="form-text text-muted">Max {{$row->stock_barang}}</small>
                        @endif
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
                        <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="tgl_pinjam" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="ket_pinjam" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="ket_pinjam" name="ket_pinjam" required>
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