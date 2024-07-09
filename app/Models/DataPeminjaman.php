<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPeminjaman extends Model
{
    use HasFactory;

    protected $table = 'data_peminjamen';
    protected $fillable = [
        'kd_barang',
        'item_barang',
        'merek_barang',
        'jml_barang',
        'nama_peminjam',
        'tgl_pinjam',
        'ket_pinjam',
    ];
}