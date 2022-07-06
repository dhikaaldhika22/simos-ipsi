<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Stok;

class StokController extends Controller
{
    //

    public function stok() {
        $dataStok = DB::table('stoks')->get();
        $user = DB::table('users')->get()->count();
        $outlet = DB::table('outlets')->get()->count();
        $stok = DB::table('stoks')->get()->count();
        return view ('menu/dataStok',['dataStok'=>$dataStok], compact('user','outlet','stok'));
    }

    public function editStok($id) {
        $dataStok = Stok::find($id);
        return view ('menu/edit-dataStok', compact('dataStok'));
    }

    public function tambahStok() {    
        return view ('menu/tambah-dataStok');
    }

    public function insertStok(Request $request){
        Stok::create([
            'nama_barang' => $request->nama_barang,
            'kondisi' => $request->kondisi,
            'kategori_barang' => $request->kategori_barang,
            'kode_barang' => $request->kode_barang,
        ]);

        return redirect ('stok')->with('success','Data Berhasil di Tambahkan');
    }

    public function updateStok(Request $request, $id){
        $dataStok = Stok::find($id);
        $dataStok->update($request->all());
        return redirect ('stok')->with('success','Data Berhasil di Edit');
    }

    public function hapusStok($id){
        $dataStok = Stok::find($id);
        $dataStok->delete();
        return redirect ('stok')->with('success','Data Berhasil di Hapus');
    }
}
