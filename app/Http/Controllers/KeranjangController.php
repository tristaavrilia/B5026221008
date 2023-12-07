<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangController extends Controller
{

    public function indexkeranjangbelanja()
	{
		$keranjangbelanja = DB::table('keranjangbelanja')->get();
		return view('indexkeranjangbelanja',['keranjangbelanja' => $keranjangbelanja]);
	}

	public function beli()
	{
		return view('beli');
	}

	public function batal($id)
	{
		DB::table('keranjangbelanja')->where('ID',$id)->delete();
		return redirect('/keranjangbelanja');
	}

	public function store(Request $request)
	{
		DB::table('keranjangbelanja')->insert([
            'ID' => $request->input('kodepembelian'),
            'KodeBarang' => $request->input('kodebarang'),
            'Harga' => $request->input('hargaperitem'),
            'Jumlah' => $request->input('jumlahpembelian')
		]);
		return redirect('/keranjangbelanja');

	}

}
