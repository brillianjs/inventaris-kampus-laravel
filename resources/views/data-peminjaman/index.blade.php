@extends('layouts.app')
@section('title', 'Data Peminjaman')

@section('content')
<div class="container bg-light" style="width:100%;">
    <div class="row justify-content-center">
        <div class="col-md-12 bg-light">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <!-- <a href="{{ route('export-data-peminjaman') }}" class="btn btn-warning">
                        <i class="fa-solid fa-file-arrow-down"></i> Export Data
                    </a> -->
                    <div>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#modalTambahData">
                            <i class="fa-solid fa-plus"></i> Tambah Data Pinjam
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive table-bordered table-striped table-hover"
                            id="data-peminjaman">
                            <thead>
                                <tr class="align-middle text-center">
                                    <th>No</th>
                                    <th>Item Barang</th>
                                    <th>Merek Barang</th>
                                    <th>Jumlah Barang </th>
                                    <th>Nama Peminjam</th>
                                    <th>Tanggal Peminjaman</th>
                                    <th>Status Peminjaman</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($data as $row)
                                    <tr>
                                        <td class="text-center">{{ $no }}</td>
                                        <td class="text-center">{{ $row->dataBarang->item_barang }}</td>
                                        <td class="text-center">{{ $row->dataBarang->merek_barang}}</td>
                                        <td class="text-center">{{ $row->jml_barang }}</td>
                                        <td class="text-center">{{ $row->nama_peminjam }}</td>
                                        <td class="text-center">{{ $row->tgl_pinjam }}</td>
                                        <td class="text-center">
                                            {{ $row->status_pinjam === "0" ? "Belum Dikembalikan" : "Sudah Dikembalikan" }}
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modalDetailData{{ $row->id }}">
                                                <i class="fa fa-eye"></i> Detail
                                            </button>
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modalEditData{{ $row->id }}">
                                                <i class="fa fa-edit"></i> Edit
                                            </button>
                                        </td>
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
@include('data-peminjaman.modals.add')
@include('data-peminjaman.modals.edit')

@endsection