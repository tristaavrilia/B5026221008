<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangController extends Controller
{

    public function indexkeranjangbelanja()
	{
    	// mengambil data dari table pegawai
		$kb = DB::table('keranjangbelanja')->get();
    	// mengirim data pegawai ke view index
		return view('indexkeranjangbelanja',['keranjangbelanja' => $kb]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function beli()
	{

		// memanggil view tambah
		return view('beli');

	}

	// method untuk hapus data pegawai
	public function batal($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}

    // method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
            'ID' => $request->input('kodepembelian'),
            'KodeBarang' => $request->input('kodebarang'),
            'Harga' => $request->input('hargaperitem'),
            'Jumlah' => $request->input('jumlahpembelian')
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');

	}

}
