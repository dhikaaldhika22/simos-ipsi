<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datasiti;
use Illuminate\Support\Facades\DB;

class DataSitiController extends Controller
{
    //
    /* Data Transaksi Siti */
    public function transaksiSiti(){
        $dataTransaksi = DB::table('datasitis')->get();
        return view ('menu/dataTransaksi',['dataTransaksi'=>$dataTransaksi]);
    }

    public function tambahSiti() {
        return view ('menu/tambah-dataSiti');
    }

    public function insertSiti(Request $request) {
        datasiti::create([
            'id' => $request->id,
            'keterangan' => $request->keterangan,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'total' => $request->total, 
        ]);

        return redirect ('transaksi');
    }

    public function editSiti($id) {
        $dataTransaksi = datasiti::find($id);
        return view ('menu/edit-dataSiti', compact('dataSiti'));
    }

    public function updateSiti(Request $request, $id){
        $dataTransaksi = datasiti::find($id)->update($request->all());
        return redirect ('transaksi')->with('success','Data Berhasil di Edit');
    }
}
