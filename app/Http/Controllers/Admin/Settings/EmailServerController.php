<?php

namespace App\Http\Controllers\Admin\Settings;
use App\Http\Controllers\Controller;
use App\Models\EmailServer;

use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EmailServerController extends Controller{
	public function __construct(){
		$this->middleware('auth');
	}
	public function index(){
		return view('admin.settings.emailserver');
	}
	public function manage(\Illuminate\Http\Request $request){
		$parameters = $request->all();
		$args = [];$resmessage = "Sorry, Command not found";$resstatus = 400;
		if ($request->isMethod('post')) {
			$s = $parameters['s'];
			switch ($s) {
				case "list":
					$args = \App\Models\EmailServer::all()->take(10);
					$resstatus = 200;
					break;
				case "add":
					$obj = new EmailServer;
					$obj->server 	= $parameters["server"];
					$obj->port 		= $parameters["port"];
					$obj->username 	= $parameters["username"];
					$obj->password 	= $parameters["password"];
					$obj->ssl 		= $request->has("ssl");
					$obj->active 	= $request->has("active");
					$obj->save();
					$args = ["message" => "OK, You have added Email Server successfully"];
					$resstatus = 200;
					break;
				case 'edit':
					EmailServer::where('id', $parameters["id"])
						->update([
							'server' 	=> $parameters["server"],
							'port' 		=> $parameters["port"],
							'username' 	=> $parameters["username"],
							'password' 	=> $parameters["password"],
							'ssl' 		=> $request->has("ssl"),
							'active' 	=> $request->has("active"),
						]);
					$args = ["message" => "OK, You have edit Email Server successfully"];
					$resstatus = 200;
					break;
				case 'delete':
					$obj = EmailServer::where(['id'=> $parameters["id"]])->first();
					\App\Models\EmailServer::where(["id" => $parameters["id"]])->delete();
					$args = ["message" => "OK, You have delete Email Server successfully"];
					$resstatus = 200;
					break;
				case 'read':
					$args = \App\Models\EmailServer::where(["id" => $parameters["id"]])->first();
					$resstatus = 200;
					break;
				default:
					break;
			}
		}
		return Response::json($args, $resstatus);
	}
}