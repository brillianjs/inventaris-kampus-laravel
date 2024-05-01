<div class="modal fade" id="modalImportData" tabindex="-1" aria-labelledby="modalTambahData" aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahData">Tambah Data Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('import-data-barang') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="custom-file">
                        <p>Masukkan file data spreedsheet berekstensi .csv, .xls, atau .xlsx</p>
                        <label class="custom-file-label" for="file">Pilih File Data</label>
                        <input type="file" class="custom-file-input" id="file" name="file"
                            accept=".csv, .xls, .xlsx" data-preview-file-type="text" data-browse="Browse..."
                            data-placeholder="Choose file">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Unggah file</button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>
</div>
<!-- Modal Tambah -->
