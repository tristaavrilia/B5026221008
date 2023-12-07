<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MobilController extends Controller
{
	public function index()
	{
		$mobil = DB::table('mobil')->get();
		return view('indexmobil',['mobil' => $mobil]);
	}

	public function tambah()
	{
		return view('tambahmobil');
	}

	public function store(Request $request)
	{
		DB::table('mobil')->insert([
			'kodemobil' => $request->kodemobil,
			'merkmobil' => $request->merkmobil,
			'stockmobil' => $request->stockmobil,
			'tersedia' => $request->tersedia
		]);
		return redirect('/mobil');

	}

	public function edit($id)
	{
		$mobil = DB::table('mobil')->where('kodemobil',$id)->get();
		return view('editmobil',['mobil' => $mobil]);
	}

	public function update(Request $request)
	{
		DB::table('mobil')->where('kodemobil',$request->kodemobil)->update([
			'merkmobil' => $request->merkmobil,
			'stockmobil' => $request->stockmobil,
			'tersedia' => $request->tersedia
		]);
        return redirect('/mobil')->with('success', 'Data updated successfully');
	}

	public function hapus($id)
	{
		DB::table('mobil')->where('kodemobil',$id)->delete();
		return redirect('/mobil');
	}

	public function cari(Request $request)
	{
		$cari = $request->cari;
		$mobil = DB::table('mobil')
		->where('merkmobil','like',"%".$cari."%")
		->paginate();

		return view('indexmobil',['mobil' => $mobil,'cari' => $cari]);

	}

	public function view($id)
	{
		$mobil = DB::table('mobil')->where('kodemobil',$id)->get();
		return view('viewmobil',['mobil' => $mobil]);
	}
}
