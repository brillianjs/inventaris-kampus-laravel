@extends('layouts.app')
@section('title', 'Data Penyimpanan Barang')

@section('content')
<div class="container bg-light" style="width:100%;">
    <div class="row justify-content-center">
        <div class="col-md-12 bg-light">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <a href="{{ route('export-data-masuk') }}" class="btn btn-warning">
                        <i class="fa-solid fa-file-arrow-down"></i> Export Data
                    </a>

                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive table-bordered table-striped table-hover" id="data-masuk">
                            <thead>
                                <tr class="align-middle text-center">
                                    <th>No</th>
                                    <!-- <th>Kode</th> -->
                                    <th>Item</th>
                                    <th>Merek</th>
                                    <th>Total Jumlah Barang</th>
                                    <th>Total Harga Barang</th>
                                    <th>Status Barang</th>
                                    {{-- <th>Aksi</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($data as $row)
                                    <tr>
                                        <td class="text-center">{{ $no }}</td>
                                        <!-- <td class="text-center">{{ $row->kd_barang }}</td> -->
                                        <td class="text-center">{{ $row->dataMasuk->item_barang }}</td>
                                        <td class="text-center">{{ $row->dataMasuk->merek_barang }}</td>
                                        <td class="text-center">{{ $row->jml_barang }}</td>
                                        <td class="text-center">{{ $row->total_harga }}</td>
                                        <td class="text-center">{{ $row->sts_tersedia }}</td>
                                        {{-- <td class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modalEditData{{ $penyimpanan->kd_barang }}">
                                                <i class="fa fa-edit"></i> Edit
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modalHapusData{{ $penyimpanan->kd_barang }}">
                                                <i class="fa fa-trash"></i> Hapus
                                            </button>
                                        </td> --}}
                                    </tr>
                                    <?php    $no++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


@endsection