namespace App\Http\Controllers;

use App\Models\DataPenyimpanan;
use App\Models\DataMasuk;
use Illuminate\Http\Request;

class DataController extends Controller
{
public function addDataFromMasuk(Request $request)
{
// Validasi data yang masuk
$data = $request->validate([
'kd_barang' => 'required|string',
'item_barang' => 'required|string',
'merek_barang' => 'required|string',
'jumlah_barang' => 'required|integer',
'harga_barang' => 'required|numeric',
'sts_barang' => 'required|string',
]);

// Cari atau buat data di penyimpanan berdasarkan kd_barang
$penyimpanan = DataPenyimpanan::firstOrNew(['kd_barang' => $data['kd_barang']]);

// Update atau set data penyimpanan
$penyimpanan->item_barang = $data['item_barang'];
$penyimpanan->merek_barang = $data['merek_barang'];
$penyimpanan->jumlah_barang = $data['jumlah_barang'];
$penyimpanan->harga_barang = $data['harga_barang'];
$penyimpanan->sts_barang = $data['sts_barang'];
$penyimpanan->save();

// Tambahkan data ke data_masuk
DataMasuk::create($data);

return response()->json(['message' => 'Data added successfully'], 200);
}
}