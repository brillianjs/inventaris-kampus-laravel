<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPenyimpanan extends Model
{
    protected $table = 'data_masuk';

    protected $fillable = ['id_barang', 'jumlah_barang', 'harga_barang', 'sts_barang'];

    public function dataMasuk()
    {
        return $this->belongsTo(DataMasuk::class, 'id_barang');
    }


}