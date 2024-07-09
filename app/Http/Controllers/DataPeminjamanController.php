<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPeminjaman;

// use Maatwebsite\Excel\Facades\Excel;
// use App\Imports\DataPeminjamanImport;
// use App\Exports\DataPeminjamanExport;

class DataPeminjamanController extends Controller
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
        $data = DataPeminjaman::all();

        return view('data-peminjaman.index', compact('data'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = new DataPeminjaman();
        $data->kode_barang = $request->kode_barang;
        $data->item_barang = $request->item_barang;
        $data->merek_barang = $request->merek_barang;
        $data->jml_barang = (int) $request->jml_barang;
        $data->nama_peminjam = $request->nama_peminjam;
        $data->tgl_pinjam = $request->tgl_pinjam;
        $data->ket_pinjam = $request->ket_pinjam;

        $data->save();
        return back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kode_barang)
    {

        $data = DataPeminjaman::where('kode_barang', $kode_barang);
        $data->update($request->only(['kode_barang', 'nama_barang', 'jumlah_barang', 'nama_peminjam', 'keterangan']));

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $kode_barang)
    {
        DataPeminjaman::where('kode_barang', $kode_barang)->delete();

        return back();
    }

    // Fungsi untuk mengimport file excel
    // public function import_excel(Request $request)
    // {
    //     $file = $request->file('file');

    //     Excel::import(new DataPeminjamanImport, $file); // Skip the first row

    //     return back()->with('success', 'Data Peminjaman berhasil diimpor!');
    // }


    // public function export_excel()
    // {
    //     return Excel::download(new DataPeminjamanExport, 'data_peminjaman.xlsx');
    // }

}