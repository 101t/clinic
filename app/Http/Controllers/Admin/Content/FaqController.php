<?php

namespace App\Http\Controllers\Admin\Content;
use App\Http\Controllers\Controller;
use App\Models\Faq;
//use Request;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FaqController extends Controller{
	public function __construct(){
		$this->middleware('auth');
	}
	public function index(){
		return view('admin.content.faq');
	}
	public function manage(\Illuminate\Http\Request $request){
		$parameters = $request->all();
		$args = [];$resmessage = "Sorry, Command not found";$resstatus = 400;
		if ($request->isMethod('post')) {
			$s = $parameters['s'];
			switch ($s) {
				case "list":
					$args = \App\Models\Faq::all()->take(10);
					$resstatus = 200;
					break;
				case "add":
					$file = $request->file('img');
					$obj = new Faq;
					$obj->name 	= $parameters["name"];
					$obj->body 	= $parameters["body"];
					$obj->icon 	= $parameters["icon"];
					$obj->lang 	= $parameters["lang"];
					$obj->save();
					$args = ["message" => "OK, You have added FAQ successfully"];
					$resstatus = 200;
					break;
				case 'edit':
					Faq::where('id', $parameters["id"])
						->update([
							'name' => $parameters["name"],
							'body' => $parameters["body"],
							'icon' => $parameters["icon"],
							'lang' => $parameters["lang"],
						]);
					$args = ["message" => "OK, You have edit FAQ successfully"];
					$resstatus = 200;
					break;
				case 'delete':
					\App\Models\Faq::where(["id" => $parameters["id"]])->delete();
					$args = ["message" => "OK, You have delete FAQ successfully"];
					$resstatus = 200;
					break;
				case 'read':
					$args = \App\Models\Faq::where(["id" => $parameters["id"]])->first();
					$resstatus = 200;
					break;
				default:
					# code...
					break;
			}
		}
		return Response::json($args, $resstatus);
	}
}