<?php

namespace App\Http\Controllers; //namespace sama spt package

use Illuminate\Http\Request;

class DosenController extends Controller{
    public function index(){
        $a=$request->input('a');
        $b=$request->input('b');
        $c=$a*$b;
    return "<h1>Hasil perkalian : " .$c. "</h1>";
    }

    public function biodata(){
    	$nama = "Diki Alfarabi Hadi";
        $alamat = "Surabaya";
        $umur = 18;
    	return view('biodata',['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }

    public function showjam($jam){ //parameter function berupa primitive data type
    	return "<h2> Sekarang jam : ".$jam."</h2>";
    }

    public function formulir(){
        return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        $nrp = $request->input('nrp');
        return "Anda telah mengisikan : <br>Nama : ".$nama.
        ", Alamat : ".$alamat.", NRP : ".$nrp."<br>".$request;
    }

}
