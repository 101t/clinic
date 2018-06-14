<?php

namespace App\Http\Controllers\Admin\Content;
use App\Http\Controllers\Controller;
use App\Models\News;

use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller{
	public function __construct(){
		$this->middleware('auth');
	}
	public function index(){
		return view('admin.content.news');
	}
	public function manage(\Illuminate\Http\Request $request){
		$parameters = $request->all();
		$args = [];$resmessage = "Sorry, Command not found";$resstatus = 400;
		if ($request->isMethod('post')) {
			$s = $parameters['s'];
			switch ($s) {
				case "list":
					$args = \App\Models\News::all()->take(10);
					$resstatus = 200;
					break;
				case "add":
					$file = $request->file('img');
					$obj = new News;
					$obj->name 	= $parameters["name"];
					$obj->body 	= $parameters["body"];
					if ($request->hasFile('img')) {
						$file = $request->file('img');
						$name = Str::uuid().'.'.$file->getClientOriginalExtension();
						$file->move(storage_path().'/uploads/', $name);
						$obj->img = 'storage/uploads/'.$name;
					}
					$obj->lang 	= $parameters["lang"];
					$obj->save();
					$args = ["message" => "OK, You have added slide successfully"];
					$resstatus = 200;
					break;
				case 'edit':
					$img 	= '';
					if ($request->hasFile('img')) {
						$file = $request->file('img');
						$name = Str::uuid().'.'.$file->getClientOriginalExtension();
						$file->move(storage_path().'/uploads/', $name);
						$img = 'storage/uploads/'.$name;
					}
					News::where('id', $parameters["id"])
						->update([
							'name' => $parameters["name"],
							'body' => $parameters["body"],
							'img' => $img,
							'lang' => $parameters["lang"],
						]);
					$args = ["message" => "OK, You have edit slide successfully"];
					$resstatus = 200;
					break;
				case 'delete':
					$obj = News::where(['id'=> $parameters["id"]])->first();
					$img_path = base_path($obj->img);
					if (file_exists($img_path) && $obj->img) {
						unlink($img_path);
					}
					\App\Models\News::where(["id" => $parameters["id"]])->delete();
					$args = ["message" => "OK, You have delete slide successfully"];
					$resstatus = 200;
					break;
				case 'read':
					$args = \App\Models\News::where(["id" => $parameters["id"]])->first();
					$resstatus = 200;
					break;
				default:
					break;
			}
		}
		return Response::json($args, $resstatus);
	}
}