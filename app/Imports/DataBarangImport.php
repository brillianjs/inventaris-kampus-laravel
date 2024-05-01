<?php

namespace App\Imports;

use App\Models\DataBarang;
use Maatwebsite\Excel\Concerns\ToModel;

class DataBarangImport implements ToModel
{
    public function model(array $row)
    {
        return new DataBarang([
            'kd_barang' => $row[0],
            'item_barang' => $row[1],
            'merek_barang' => $row[2],
            'hrg_barang' => $row[3],
            'sts_barang' => $row[4],
        ]);
    }
}