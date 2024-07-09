@extends('layouts.app')
@section('title', 'Data Barang Masuk')

@section('content')

    <div class="container bg-light" style="width:100%;">
        <div class="row justify-content-center">
            <div class="col-md-12 bg-light">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <a href="{{ route('export-data-masuk') }}" class="btn btn-warning">
                            <i class="fa-solid fa-file-arrow-down"></i> Export Data
                        </a>
                        <div>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#modalImportData">
                                <i class="fa-solid fa-file-import"></i></i> Import Data
                            </button>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#modalTambahData">
                                <i class="fa-solid fa-plus"></i> Tambah Data
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert" id="disposableAlert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert" id="disposableAlert">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('edited'))
                            <div class="alert alert-primary" role="alert" id="disposableAlert">
                                {{ session('edited') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-responsive table-bordered table-striped table-hover" id="data-masuk">
                                <thead>
                                    <tr class="align-middle text-center">
                                        <th>No</th>
                                        <th>Kode Masuk</th>
                                        <th>Item</th>
                                        <th>Merek Barang </th>
                                        <th>Jumlah Barang</th>
                                        <th>Harga Barang</th>
                                        <th>Status Barang</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($data as $row)
                                        <tr>
                                            <td class="text-center">{{ $no }}</td>
                                            <td class="text-center">{{ $row->kd_barang }}</td>
                                            <td class="text-center">{{ $row->item_barang }}</td>
                                            <td class="text-center">{{ $row->merek_barang }}</td>
                                            <td class="text-center">{{ $row->jml_barang }}</td>
                                            <td class="text-center">{{ $row->hrg_barang }}</td>
                                            <td class="text-center">{{ $row->sts_barang }}</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#modalEditData{{ $row->kd_barang }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#modalHapusData{{ $row->kd_barang }}">
                                                    <i class="fa fa-trash"></i> Hapus
                                                </button>
                                            </td>
                                        </tr>
                                        @include('data-masuk.modals.delete')
                                        <?php $no++; ?>
                                        @include('data-masuk.modals.edit')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            {{-- <form action="{{ route('import-data-masuk') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="file">File</label>
                    <input type="file" class="form-control-file" name="file" id="file"
                        accept=".csv, .xls, .xlsx">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form> --}}
        </div>
    </div>
    @include('data-masuk.modals.add')
    @include('data-masuk.modals.import')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        setTimeout(function() {
            document.getElementById('disposableAlert').style.display = 'none';
        }, 2000);
    </script>

@endsection
