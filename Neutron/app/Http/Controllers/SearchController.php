<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
    function search(Request $request) {
        $this->validate($request, rules:[
            'query' => 'required',
        ]);

        if(asset($_GET['query'])) {
            $search_text = $_GET['query'];
            $users = DB::table('users')->where('name','LIKE', '%' .$search_text. '%')->paginate(1);
            return view('menu/search-dataKaryawan',['users'=>$users]);
        }else{
            return view('menu/search-dataKaryawan', compact('users'));
        }
    }

    function searchOutlet(Request $request) {
        $this->validate($request, rules:[
            'query' => 'required',
        ]);

        if(asset($_GET['query-outlet'])) {
            $search_text = $_GET['query-outlet'];
            $outlet = DB::table('outlets')->where('outlet_name','LIKE', '%' .$search_text. '%')->paginate(2);
            return view('menu/search-dataOutlet',['outlet'=>$outlet]);
        }else{
            return view('menu/search-dataOutlet');
        }
    }

    function searchStok(Request $request) {
        $this->validate($request, rules:[
            'query' => 'required',
        ]);
        
        if(asset($_GET['query-stok'])) {
            $search_text = $_GET['query-stok'];
            $stok = DB::table('stoks')->where('nama_barang','LIKE', '%' .$search_text. '%')->paginate(2);
            return view('menu/search-dataStok',['stok'=>$stok]);
        }else{
            return view('menu/search-dataStok');
        }
    }
}