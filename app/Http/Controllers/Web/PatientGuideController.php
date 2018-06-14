<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\PatientGuide;
use Illuminate\Http\Request;

class PatientGuideController extends Controller{
	public function index(Request $request){
		$patientguidees = PatientGuide::when($request->search, function($query) use ($request) {
			$search = $request->search;
			return $query->where('name', 'like', '%$search%')->orWhere('body', 'like', '%$search%');
		})->simplePaginate(10);
		return view('web.patientguide', get_defined_vars());
	}
	public function detail($slug){
		$patientguide = PatientGuide::whereSlug($slug)->first();
		return view('web.patientguide_detail', get_defined_vars());
	}
}