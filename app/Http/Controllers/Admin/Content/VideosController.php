<?php

namespace App\Http\Controllers\Admin\Content;
use App\Http\Controllers\Controller;

use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideosController extends Controller{
	public function __construct(){
		$this->middleware('auth');
	}
	public function index(){
		return view('admin.content.videos');
	}
	public function manage(\Illuminate\Http\Request $request){
		$parameters = $request->all();
		$args = [];$resmessage = "Sorry, Command not found";$resstatus = 400;
		if ($request->isMethod('post')) {
			$s = $parameters['s'];
			switch ($s) {
				case "list":
					break;
				case "add":
					break;
				case "edit":
					break;
				case "delete":
					break;
				case "read":
					break;
				default:
					break;
			}
		}
		return Response::json($args, $resstatus);
	}
}