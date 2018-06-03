<?php

namespace App\Http\Controllers\Admin\Content;
use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
//use Request;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller{
	public function __construct(){
		$this->middleware('auth');
	}
	public function index(){
		return view('admin.content.slider');
	}
	public function manage(\Illuminate\Http\Request $request){
		//dd($request);
		//$request = json_decode($request->assets);//json_decode($request->getContent(), true);

		$parameters = $request->all();
		$args = [];$resmessage = "Sorry, Command not found";$resstatus = 400;
		if ($request->isMethod('post')) {
			$s = $parameters['s'];
			switch ($s) {
				case "list":
					$args = \App\Models\HomeSlider::all()->take(10);
					//$args = ["message" => "OK, You have added slide successfully"];
					$resstatus = 200;
					break;
				case "add":
					$file = $request->file('img');
					$obj = new HomeSlider;
					$obj->name 	= $parameters["name"];
					$obj->body 	= $parameters["body"];
					if ($request->hasFile('img')) {
						$file = $request->file('img');
						$name = Str::uuid().'.'.$file->getClientOriginalExtension();
						$file->move(storage_path().'/uploads/', $name);
						$obj->img = 'storage/uploads/'.$name;
					} else {
						$obj->img 	= 'bg.jpg';
					}
					$obj->float = $parameters["float"] == "true";
					$obj->url 	= $parameters["url"];
					$obj->lang 	= $parameters["lang"];
					$obj->save();
					$args = ["message" => "OK, You have added slide successfully"];
					$resstatus = 200;
					break;
				case 'edit':
					$img 	= 'bg.jpg';
					if ($request->hasFile('img')) {
						$file = $request->file('img');
						$name = Str::uuid().'.'.$file->getClientOriginalExtension();
						$file->move(storage_path().'/uploads/', $name);
						$img = 'storage/uploads/'.$name;
					}
					HomeSlider::where('id', $parameters["id"])
						->update([
							'name' => $parameters["name"],
							'body' => $parameters["body"],
							'img' => $img,
							'float' => $parameters["float"] == "true",
							'url' => $parameters["url"],
							'lang' => $parameters["lang"],
						]);
					/*$obj = HomeSlider::where(['id'=> $parameters["id"]])->first();
					$obj->name = $parameters["name"];
					$obj->body = $parameters["body"];
					$obj->img = $img;
					$obj->float = $parameters["float"] == "true";
					$obj->url = $parameters["url"];
					$obj->lang = $parameters["lang"];
					$obj->save();*/
					$args = ["message" => "OK, You have edit slide successfully"];
					$resstatus = 200;
					break;
				case 'delete':
					$obj = HomeSlider::where(['id'=> $parameters["id"]])->first();
					$img_path = base_path($obj->img);
					if (file_exists($img_path)) {
						unlink($img_path);
					}
					\App\Models\HomeSlider::where(["id" => $parameters["id"]])->delete();
					$args = ["message" => "OK, You have delete slide successfully"];
					$resstatus = 200;
					break;
				case 'read':
					$args = \App\Models\HomeSlider::where(["id" => $parameters["id"]])->first();
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