<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function dashboard(){
        $user = DB::table('users')->get()->count();
        $outlet = DB::table('outlets')->get()->count();
        $stok = DB::table('stoks')->get()->count();
        return view('menu/dashboard', compact('user','outlet','stok'));
    }


}
