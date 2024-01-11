<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;          

class pelanggancontroller extends Controller
{
    function index(){
        $judul = "brow";
        $pelanggan = DB::table('pelanggan')->get();
        return view('pelanggan', ['judul' => $judul, 'pelanggan' => $pelanggan]);

    }

    function delete ($pelanggan_id){
        DB::table('pelanggan')->where('pelanggan_id','=',$pelanggan_id)->delete();
        return redirect('pelanggan');

    }
}
