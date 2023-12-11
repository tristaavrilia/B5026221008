<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KodeffController extends Controller
{
	public function index()
    {
        $counter = DB::table('counter')->first();
        return view('indexff', ['counter' => $counter]);
    }

    public function update(Request $request)
    {
        DB::table('counter')->where('ID', $request->ID)->increment('Jumlah', 1);
        $counter = DB::table('counter')->where('ID', $request->ID)->first();
        return view('indexff', ['counter' => $counter])->with('success', 'Count updated successfully');
    }

}
