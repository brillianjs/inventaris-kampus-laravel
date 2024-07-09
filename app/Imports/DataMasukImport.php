<?php

namespace App\Imports;

use App\Models\DataMasuk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DataMasukImport implements ToModel, WithStartRow
{
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2; // Mulai dari baris kedua (baris pertama berisi penamaan kolom)
    }

    /**
     * @param array $row
     *
     * @return DataMasuk|null
     */
    public function model(array $row)
    {
        return new DataMasuk([
            'kd_barang' => $row[0],
            'item_barang' => $row[1],
            'merek_barang' => $row[2],
            'jml_barang' => $row[3],
            'hrg_barang' => $row[4],
            'sts_barang' => $row[5],
            'sts_tersedia' => $row[6],
        ]);
    }
}