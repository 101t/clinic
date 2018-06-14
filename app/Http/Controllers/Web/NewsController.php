<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller{
	public function index(Request $request){
		$collectionlist = News::when($request->search, function($query) use ($request) {
			$search = $request->search;
			return $query->where('name', 'like', '%$search%')->orWhere('body', 'like', '%$search%');
		})->simplePaginate(10);
		return view('web.news', get_defined_vars());
	}
	public function detail($slug){
		$news = News::whereSlug($slug)->first();
		return view('web.news_detail', get_defined_vars());
	}
}