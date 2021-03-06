<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::paginate(6); //add in App.vue function axios res.data.data
        // $posts = Post::all(); // add in App.vue function axios res.data
        return response()->json($posts);
    }

    public function show($slug) {
        $post = Post::where('slug', $slug)->with(['category', 'tags'])->first();

        // NON HO CAPITO A CHE SERVE 
        if(!empty($post)) {
            if($post->cover) {
                //metodo url(come assets parte da public)
                $post->cover = url('storage/'. $post->cover);
            } else {
                $post->cover = url('images/placeholder.png');
            }
        }

		return response()->json($post);
    }
}
