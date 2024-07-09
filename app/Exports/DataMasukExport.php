<?php

namespace App\Exports;

use App\Models\DataMasuk;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataMasukExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DataMasuk::all();
    }

    public function headings(): array
    {
        return [
            'Kode Barang',
            'Item Barang',
            'Merek Barang',
            'Harga Barang',
            'Status Barang'
        ];
    }
}