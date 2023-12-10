<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaikuliahController extends Controller
{
	public function index()
	{
		$nilaikuliah = DB::table('nilaikuliah')->get();
		return view('indexnilai',['nilaikuliah' => $nilaikuliah]);
	}

	public function tambah()
	{
		return view('tambahnilai');
	}

	public function store(Request $request)
	{
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->nrp,
			'NilaiAngka' => $request->nilaiangka,
			'SKS' => $request->sks
        ]);
		return redirect('/nilai');

	}

	public function cari(Request $request)
	{
		$cari = $request->cari;

		$nilaikuliah = DB::table('nilaikuliah')
		->where('nrp','like',"%".$cari."%")
		->paginate();
		return view('indexnilai',['nilaikuliah' => $nilaikuliah,'cari' => $cari]);
	}
}
