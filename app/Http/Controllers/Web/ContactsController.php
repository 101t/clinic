<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

class ContactsController extends Controller{
	public function __construct(){
		$this->middleware('guest');
	}
	public function index(){
		return view('web.contacts');
	}
}