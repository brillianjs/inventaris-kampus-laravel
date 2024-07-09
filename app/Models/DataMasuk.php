<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMasuk extends Model
{
    use HasFactory;

    protected $table = 'data_masuk';


    protected $fillable = [
        'kd_barang',
        'item_barang',
        'merek_barang',
        'jml_barang',
        'hrg_barang',
        'sts_barang',
        'sts_tersedia',
    ];

    // public function dataPenyimpanan()
    // {
    //     return $this->hasMany(DataPenyimpanan::class, 'kd_barang', 'kd_barang');
    // }
}