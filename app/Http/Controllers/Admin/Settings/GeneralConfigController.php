<?php

namespace App\Http\Controllers\Admin\Settings;
use App\Http\Controllers\Controller;
use App\Models\GeneralConfig;

use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GeneralConfigController extends Controller{
	public function __construct(){
		$this->middleware('auth');
	}
	public function index(){
		return view('admin.settings.generalconfig');
	}
	public function manage(\Illuminate\Http\Request $request){
		$parameters = $request->all();
		$args = [];$resmessage = "Sorry, Command not found";$resstatus = 400;
		if ($request->isMethod('post')) {
			$s = $parameters['s'];
			switch ($s) {
				case "list":
					$args = \App\Models\GeneralConfig::all()->take(10);
					$resstatus = 200;
					break;
				case "add":
					$obj = new GeneralConfig;
					$obj->name 				= $parameters["name"];
					if ($request->hasFile('logo')) {
						$file = $request->file('logo');
						$name = Str::uuid().'.'.$file->getClientOriginalExtension();
						$file->move(storage_path().'/uploads/', $name);
						$obj->logo = 'storage/uploads/'.$name;
					}
					if ($request->hasFile('logo2')) {
						$file = $request->file('logo2');
						$name = Str::uuid().'.'.$file->getClientOriginalExtension();
						$file->move(storage_path().'/uploads/', $name);
						$obj->logo2 = 'storage/uploads/'.$name;
					}
					if ($request->hasFile('favicon')) {
						$file = $request->file('favicon');
						$name = Str::uuid().'.'.$file->getClientOriginalExtension();
						$file->move(storage_path().'/uploads/', $name);
						$obj->favicon = 'storage/uploads/'.$name;
					}
					if ($request->hasFile('footer')) {
						$file = $request->file('footer');
						$name = Str::uuid().'.'.$file->getClientOriginalExtension();
						$file->move(storage_path().'/uploads/', $name);
						$obj->footer = 'storage/uploads/'.$name;
					}
					$obj->short_about 		= $parameters["short_about"];
					$obj->short_services 	= $parameters["short_services"];
					$obj->short_blog 		= $parameters["short_blog"];
					$obj->short_faq 		= $parameters["short_faq"];
					$obj->meta_description 	= $parameters["meta_description"];
					$obj->meta_keywords 	= $parameters["meta_keywords"];
					$obj->google_analytics 	= $parameters["google_analytics"];
					$obj->about 			= $parameters["about"];
					$obj->address 			= $parameters["address"];
					$obj->phone1 			= $parameters["phone1"];
					$obj->phone2 			= $parameters["phone2"];
					$obj->mobile 			= $parameters["mobile"];
					$obj->fax 				= $parameters["fax"];
					$obj->website 			= $parameters["website"];
					$obj->email 			= $parameters["email"];
					$obj->reset_password 	= $request->has("reset_password");
					$obj->theme 			= $parameters["theme"];
					$obj->welcome 			= $parameters["welcome"];
					$obj->facebook 			= $parameters["facebook"];
					$obj->whatsapp 			= $parameters["whatsapp"];
					$obj->viber 			= $parameters["viber"];
					$obj->skype 			= $parameters["skype"];
					$obj->linkedin 			= $parameters["linkedin"];
					$obj->twitter 			= $parameters["twitter"];
					$obj->instagram 		= $parameters["instagram"];
					$obj->google 			= $parameters["google"];
					$obj->youtube 			= $parameters["youtube"];
					$obj->vimeo 			= $parameters["vimeo"];
					$obj->useterms 			= $parameters["useterms"];
					$obj->privacypolicy 	= $parameters["privacypolicy"];
					$obj->latitude 			= $parameters["latitude"];
					$obj->longitude 		= $parameters["longitude"];
					$obj->copyright 		= $parameters["copyright"];
					$obj->lang 				= $parameters["lang"];
					$obj->save();
					$args = ["message" => "OK, You have added General Configuration successfully"];
					$resstatus = 200;
					break;
				case 'edit':
					$logo 	= '';
					if ($request->hasFile('logo')) {
						$file = $request->file('logo');
						$name = Str::uuid().'.'.$file->getClientOriginalExtension();
						$file->move(storage_path().'/uploads/', $name);
						$logo = 'storage/uploads/'.$name;
					}
					$logo2 	= '';
					if ($request->hasFile('logo2')) {
						$file = $request->file('logo2');
						$name = Str::uuid().'.'.$file->getClientOriginalExtension();
						$file->move(storage_path().'/uploads/', $name);
						$logo2 = 'storage/uploads/'.$name;
					}
					$favicon 	= '';
					if ($request->hasFile('favicon')) {
						$file = $request->file('favicon');
						$name = Str::uuid().'.'.$file->getClientOriginalExtension();
						$file->move(storage_path().'/uploads/', $name);
						$favicon = 'storage/uploads/'.$name;
					}
					$footer 	= '';
					if ($request->hasFile('footer')) {
						$file = $request->file('footer');
						$name = Str::uuid().'.'.$file->getClientOriginalExtension();
						$file->move(storage_path().'/uploads/', $name);
						$footer = 'storage/uploads/'.$name;
					}
					GeneralConfig::where('id', $parameters["id"])
						->update([
							'name' => $parameters["name"],
							'logo' => $logo,
							'logo2' => $logo2,
							'favicon' => $favicon,
							'footer' => $footer,
							'short_about' => $parameters["short_about"],
							'short_services' => $parameters["short_services"],
							'short_blog' => $parameters["short_blog"],
							'short_faq' => $parameters["short_faq"],
							'meta_description' => $parameters["meta_description"],
							'meta_keywords' => $parameters["meta_keywords"],
							'google_analytics' => $parameters["google_analytics"],
							'about' => $parameters["about"],
							'address' => $parameters["address"],
							'phone1' => $parameters["phone1"],
							'phone2' => $parameters["phone2"],
							'mobile' => $parameters["mobile"],
							'fax' => $parameters["fax"],
							'website' => $parameters["website"],
							'email' => $parameters["email"],
							'reset_password' => $request->has("reset_password"),
							'theme' => $parameters["theme"],
							'welcome' => $parameters["welcome"],
							'facebook' => $parameters["facebook"],
							'whatsapp' => $parameters["whatsapp"],
							'viber' => $parameters["viber"],
							'skype' => $parameters["skype"],
							'linkedin' => $parameters["linkedin"],
							'twitter' => $parameters["twitter"],
							'instagram' => $parameters["instagram"],
							'google' => $parameters["google"],
							'youtube' => $parameters["youtube"],
							'vimeo' => $parameters["vimeo"],
							'useterms' => $parameters["useterms"],
							'privacypolicy' => $parameters["privacypolicy"],
							'latitude' => $parameters["latitude"],
							'longitude' => $parameters["longitude"],
							'copyright' => $parameters["copyright"],
							'lang' => $parameters["lang"],
						]);
					$args = ["message" => "OK, You have edit General Configuration successfully"];
					$resstatus = 200;
					break;
				case 'delete':
					$obj = GeneralConfig::where(['id'=> $parameters["id"]])->first();
					$img_path = base_path($obj->logo);
					if (file_exists($img_path) && $obj->logo) {
						unlink($img_path);
					}
					$img_path = base_path($obj->logo2);
					if (file_exists($img_path) && $obj->logo2) {
						unlink($img_path);
					}
					$img_path = base_path($obj->favicon);
					if (file_exists($img_path) && $obj->favicon) {
						unlink($img_path);
					}
					$img_path = base_path($obj->footer);
					if (file_exists($img_path) && $obj->footer) {
						unlink($img_path);
					}
					\App\Models\GeneralConfig::where(["id" => $parameters["id"]])->delete();
					$args = ["message" => "OK, You have delete General Configuration successfully"];
					$resstatus = 200;
					break;
				case 'read':
					$args = \App\Models\GeneralConfig::where(["id" => $parameters["id"]])->first();
					$resstatus = 200;
					break;
				default:
					break;
			}
		}
		return Response::json($args, $resstatus);
	}
}