<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Outlet;

class OutletController extends Controller
{
    //
    public function outlet() {
        $dataOutlet = DB::table('outlets')->get();
        $user = DB::table('users')->get()->count();
        $outlet = DB::table('outlets')->get()->count();
        $stok = DB::table('stoks')->get()->count();
        return view ('menu/dataOutlet',['dataOutlet'=>$dataOutlet], compact('user','outlet','stok'));
    }

    public function editOutlet($id) {
        $dataOutlet = Outlet::find($id);
        return view ('menu/edit-outlet', compact('dataOutlet'));
    }

    public function tambahOutlet() {    
        return view ('menu/tambah-dataOutlet');
    }

    public function insertOutlet(Request $request){
        Outlet::create([
            'outlet_name' => $request->outlet_name,
            'kota' => $request->kota,
            'alamat' => $request->alamat,
            'outlet_email' => $request->outlet_email,
        ]);

        return redirect ('outlet')->with('success','Data Berhasil di Tambahkan');
    }

    public function updateOutlet(Request $request, $id){
        $dataOutlet = Outlet::find($id)->update($request->all());
        return redirect ('outlet')->with('success','Data Berhasil di Edit');
    }

    public function hapusOutlet($id){
        $dataOutlet = Outlet::find($id);
        $dataOutlet->delete();
        return redirect ('outlet')->with('success','Data Berhasil di Hapus');
    }
}
