<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Queue\RedisQueue;
use Symfony\Component\HttpFoundation\RequestStack;

class KaryawanController extends Controller
{
    //
    public function karyawan() {
        $dataKaryawan = DB::table('users')->get();
        $user = DB::table('users')->get()->count();
        $outlet = DB::table('outlets')->get()->count();
        $stok = DB::table('stoks')->get()->count();
        return view ('menu/dataKaryawan',['dataKaryawan'=>$dataKaryawan], compact('user','outlet','stok'));
    }

    public function editKaryawan($id) {
        $dataKaryawan = User::find($id);
        return view ('menu/edit-dataKaryawan', compact('dataKaryawan'));
    }

    public function tambahKaryawan() {
        return view ('menu/tambah-dataKaryawan');
    }

    public function insertKaryawan(Request $request) {
        User::create([
            'name' => $request->name,
            'employee' => $request->employee,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'password' => bcrypt($request->password), 
        ]);

        return redirect ('karyawan')->with('success','Data Berhasil di Tambahkan');
    }

    public function updateKaryawan(Request $request, $id){
        $dataKaryawan = User::find($id)->update($request->all());
        return redirect ('karyawan')->with('success','Data Berhasil di Edit');
    }

    public function hapusKaryawan($id){
        $dataKaryawan = User::find($id);
        $dataKaryawan->delete();
        return redirect ('karyawan')->with('success','Data Berhasil di Hapus');
    }
}
