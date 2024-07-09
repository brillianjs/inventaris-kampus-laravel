<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPenyimpanan;

class DataPenyimpananController extends Controller
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
    public function index()
    {
        $data = DataPenyimpanan::all();
        return view('data-penyimpanan.index', compact('data'));
    }
}