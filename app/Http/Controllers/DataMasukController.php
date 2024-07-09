<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataMasuk;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataMasukImport;
use App\Exports\DataMasukExport;


class DataMasukController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DataMasuk::all();

        return view('data-masuk.index', compact('data'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $data = new DataMasuk();
        $data->kd_barang = $request->kd_barang;
        $data->item_barang = $request->item_barang;
        $data->merek_barang = $request->merek_barang;
        $data->jml_barang = (int) $request->jml_barang;
        $data->stock_barang = (int) $request->jml_barang;
        $data->hrg_barang = (int) $request->hrg_barang;
        $data->sts_barang = $request->sts_barang;
        $data->total_harga = (int) $request->jml_barang * (int) $request->hrg_barang; // Hitung total harga

        $data->save();

        return back()->with('success', 'Data berhasil ditambahkan!');
    }

    public function update(Request $request, string $kd_barang)
    {
        $data = DataMasuk::where('kd_barang', $kd_barang)->first();
        $data->update($request->only(['kd_barang', 'item_barang', 'merek_barang', 'hrg_barang', 'sts_barang']));
        $data->total_harga = (int) $data->jml_barang * (int) $data->hrg_barang; // Hitung ulang total harga
        $data->save();

        return back()->with('edited', 'Data berhasil diedit!');
    }

    public function destroy(string $kd_barang)
    {
        DataMasuk::where('kd_barang', $kd_barang)->delete();

        return back()->with('error', 'Data berhasil dihapus!');
    }


    // Fungsi untuk mengimport file excel
    public function import_excel(Request $request)
    {
        $file = $request->file('file');

        Excel::import(new DataMasukImport, $file); // Skip the first row

        return back()->with('success', 'Data Barang Masuk berhasil diimpor!');
    }


    public function export_excel()
    {
        return Excel::download(new DataMasukExport, 'data_masuk.xlsx');
    }

}