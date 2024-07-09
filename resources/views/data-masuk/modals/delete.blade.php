<div class="modal fade" id="modalHapusData{{ $row->kd_barang }}" tabindex="-1" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex">
                    <h5 class="modal-title" id="deleteModalLabel">Hapus Data Barang Masuk</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post" action="{{ route('delete-data-masuk', $row->kd_barang) }}">
                @csrf
                @method('DELETE')

                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus Data Barang Masuk ini?</p>
                    {{-- <p>
                        Kode Barang : {{ $row->kd_barang }}
                    </p>
                    <p>
                        Item Barang : {{ $row->item_barang }}
                    </p>
                    <p>
                        Merek Barang : {{ $row->merek_barang }}
                    </p> --}}
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
