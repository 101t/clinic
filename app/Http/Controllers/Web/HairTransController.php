<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\HairTrans;
use Illuminate\Http\Request;

class HairTransController extends Controller{
	public function index(Request $request){
		$hairtranses = HairTrans::when($request->search, function($query) use ($request) {
			$search = $request->search;
			return $query->where('name', 'like', '%$search%')->orWhere('body', 'like', '%$search%');
		})->simplePaginate(10);
		return view('web.hairtrans', get_defined_vars());
	}
	public function detail($slug){
		$hairtrans = HairTrans::whereSlug($slug)->first();
		//$hairtrans = $hairtrans->load();
		return view('web.hairtrans_detail', get_defined_vars());
	}
}