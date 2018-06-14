<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use App\Models\HomeSlider;

class HomeController extends Controller{
	public function __construct(){
		//$this->middleware('guest');
	}
	public function index(){
		$homesliders = HomeSlider::all()->take(5);
		return view('web.home', get_defined_vars());
	}
}