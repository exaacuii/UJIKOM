<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\produk;

class produkcontroller extends Controller
{
    function index(){
        $judul = "brow";
        $produk = DB::table('produk')->get();
        return view('produk', ['judul' => $judul, 'produk' => $produk]);

    }

    function delete ($produkid){
        DB::table('produk')->where('produkid','=',$produkid)->delete();
        return redirect('produk');
    }

    function produk(){
        return view('tambah_produk');
    }

    function tambah_produk(request $request){
        $namaproduk = $request ->namaproduk;
        $harga = $request ->harga;
        $stok = $request ->stok;

        $produk = DB::table('produk')->insert([
            'namaproduk' => $namaproduk,
            'harga' => $harga,
            'stok' => $stok
        ]);
        return redirect('/produk');
    }
}
