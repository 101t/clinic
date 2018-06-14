<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller{
	public function __construct(){
		//$this->middleware('guest');
	}
	public function index(Request $request){
		$collectionlist = Post::when($request->search, function($query) use($request) {
            $search = $request->search;
            return $query->where('title', 'like', "%$search%")
                ->orWhere('body', 'like', "%$search%");
        })->with('tags', 'category', 'user')
        ->withCount('comments')
        //->published()
        ->simplePaginate(12);
		return view('web.blog', get_defined_vars());
	}
	public function detail($slug){
		$post = Post::whereSlug($slug)->first()->load(['comments.user', 'tags', 'user', 'category']);
		return view('web.blog_detail', get_defined_vars());
	}
}