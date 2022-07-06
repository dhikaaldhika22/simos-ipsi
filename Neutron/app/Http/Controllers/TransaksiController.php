<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\datanur;
use App\Models\datasiti;
use App\Models\datajamal;

class TransaksiController extends Controller
{
    //
    public function transaksi() {
        $dataTransaksi = DB::table('datanurs')->get();
        $dataSiti = DB::table('datasitis')->get();
        $dataJamal = DB::table('datajamals')->get();
        $user = DB::table('users')->get()->count();
        $outlet = DB::table('outlets')->get()->count();
        $stok = DB::table('stoks')->get()->count();
        return view ('menu/dataTransaksi',['dataTransaksi'=>$dataTransaksi],['dataSiti'=>$dataSiti]+['dataJamal'=>$dataJamal]+['user'=>$user]+['outlet'=>$outlet]+['stok'=>$stok]);
    }

    public function dataNovember() {
        $dataTransaksi = DB::table('datanurs')->get();
        $dataSiti = DB::table('datasitis')->get();
        $dataJamal = DB::table('datajamals')->get();
        $user = DB::table('users')->get()->count();
        $outlet = DB::table('outlets')->get()->count();
        $stok = DB::table('stoks')->get()->count();
        return view ('menu/dataNovember',['dataTransaksi'=>$dataTransaksi],['dataSiti'=>$dataSiti]+['dataJamal'=>$dataJamal]+['user'=>$user]+['outlet'=>$outlet]+['stok'=>$stok]);
    }

    public function dataSeptember() {
        $dataTransaksi = DB::table('datanurs')->get();
        $dataSiti = DB::table('datasitis')->get();
        $dataJamal = DB::table('datajamals')->get();
        $user = DB::table('users')->get()->count();
        $outlet = DB::table('outlets')->get()->count();
        $stok = DB::table('stoks')->get()->count();
        return view ('menu/dataSeptember',['dataTransaksi'=>$dataTransaksi],['dataSiti'=>$dataSiti]+['dataJamal'=>$dataJamal]+['user'=>$user]+['outlet'=>$outlet]+['stok'=>$stok]);
    }

    public function dataOktober() {
        $dataTransaksi = DB::table('datanurs')->get();
        $dataSiti = DB::table('datasitis')->get();
        $dataJamal = DB::table('datajamals')->get();
        $user = DB::table('users')->get()->count();
        $outlet = DB::table('outlets')->get()->count();
        $stok = DB::table('stoks')->get()->count();
        return view ('menu/dataOktober',['dataTransaksi'=>$dataTransaksi],['dataSiti'=>$dataSiti]+['dataJamal'=>$dataJamal]+['user'=>$user]+['outlet'=>$outlet]+['stok'=>$stok]);
    }

    public function tambahNur() {
        return view ('menu/tambah-dataNur');
    }

    public function insertNur(Request $request) {
        datanur::create([
            'id' => $request->id,
            'keterangan' => $request->keterangan,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'total' => $request->total, 
        ]);

        return redirect ('transaksi');
    }

    public function editNur($id) {
        $dataTransaksi = datanur::find($id);
        return view ('menu/edit-dataNur', compact('dataTransaksi'));
    }

    public function updateNur(Request $request, $id){
        $dataTransaksi = datanur::find($id)->update($request->all());
        return redirect ('transaksi')->with('success','Data Berhasil di Edit');
    }
    
    /* Siti */
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
        $dataSiti = datasiti::find($id);
        return view ('menu/edit-dataSiti', compact('dataSiti'));
    }

    public function updateSiti(Request $request, $id){
        $dataSiti = datasiti::find($id)->update($request->all());
        return redirect ('transaksi')->with('success','Data Berhasil di Edit');
    }

    /* Jamal */
    public function tambahJamal() {
        return view ('menu/tambah-dataJamal');
    }

    public function insertJamal(Request $request) {
        datajamal::create([
            'id' => $request->id,
            'keterangan' => $request->keterangan,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'total' => $request->total, 
        ]);

        return redirect ('transaksi');
    }

    public function editJamal($id) {
        $dataJamal = datajamal::find($id);
        return view ('menu/edit-dataJamal', compact('dataJamal'));
    }

    public function updateJamal(Request $request, $id){
        $dataJamal = datajamal::find($id)->update($request->all());
        return redirect ('transaksi')->with('success','Data Berhasil di Edit');
    }
}
