<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPenyimpanan extends Model
{
    protected $table = 'data_masuk';

    protected $fillable = ['kd_barang', 'jumlah_barang', 'harga_barang', 'sts_barang'];

    public function dataMasuk()
    {
        return $this->belongsTo(DataMasuk::class, 'kd_barang', 'kd_barang');
    }

    // Fungsi untuk menghitung jumlah barang dan total harga barang berdasarkan item dan merek barang
    public static function getTotalByItemAndMerek()
    {
        return static::with('dataMasuk')
            ->select('item_barang', 'merek_barang')
            ->selectRaw('SUM(jumlah_barang) as total_jumlah_barang')
            ->selectRaw('SUM(jumlah_barang * harga_barang) as total_harga_barang')
            ->groupBy('item_barang', 'merek_barang')
            ->get();
    }


}