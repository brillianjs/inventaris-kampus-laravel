<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBarang;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataBarangImport;

class DataBarangController extends Controller
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
        $data = DataBarang::all();

        return view('data_barang.index', compact('data'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Check if `kd_barang` already exists
        $existingBarang = DataBarang::where('kd_barang', $request->kd_barang)->first();

        if ($existingBarang) {
            // Display Bootstrap alert for duplicate `kd_barang`
            $alert = "<div class='alert alert-danger' role='alert'>
                        Gagal menambahkan barang! Kode barang ('{$request->kd_barang}') sudah ada.
                    </div>";

            // Return back with the alert message
            return back()->with('alert', $alert);
        }

        // If `kd_barang` is unique, proceed with saving data
        $data = new DataBarang();
        $data->kd_barang = $request->kd_barang;
        $data->item_barang = $request->item_barang;
        $data->merek_barang = $request->merek_barang;
        $data->hrg_barang = (int)$request->hrg_barang;
        $data->sts_barang = $request->sts_barang;

        $data->save();

        // Display Bootstrap alert for successful addition
        $alert = "<div class='alert alert-success' role='alert'>
                        Berhasil menambahkan barang!
                    </div>";

        // Return back with the alert message
        return back()->with('alert', $alert);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kd_barang)
    {

        $data = DataBarang::where('kd_barang', $kd_barang);
        $data->update($request->only(['kd_barang', 'item_barang', 'merek_barang', 'hrg_barang', 'sts_barang']));

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $kd_barang)
    {
        DataBarang::where('kd_barang', $kd_barang)->delete();

        return back();
    }

    // Fungsi untuk mengimport file excel
    public function import_excel(Request $request)
    {
        $file = $request->file('file');

        Excel::import(new DataBarangImport, $file);

        return back()->with('success', 'Data Barang berhasil diimpor!');
    }
}