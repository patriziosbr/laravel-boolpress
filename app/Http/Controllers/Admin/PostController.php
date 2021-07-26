<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        dump($request);
        //add validate([])
        $request->validate(
            [
                'title' => 'required',
                'author' => 'required',
                //'slug' => 'required|max:255',
                'content' => 'required',
                'post_date' => 'required'
            ]
        );

        $data = $request->all();


        $newPost = new Post();

        $newPost->title = $data['title'];
        $newPost->author = $data['author'];
        $newPost->content = $data['content'];
        $newPost->post_date = $data['post_date'];
        // $newPost->slug = $data['title'] . '-' . $data['author'];
        $slug = $data['title'] . '-' . $data['author'];
        $newPost->slug = Str::slug($slug, '-');
        //al posto di tutto questo che precede 
        // newPost->fill($data); ma c'è da aggiungere la variabile protected $fillable = [];
        $newPost->save();

        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrfail($id);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        
        $request->validate(
                [
                        'title' => 'required',
                        'author' => 'required',
                        //'slug' => 'required|max:255',
                        'content' => 'required',
                        'post_date' => 'required'
                    ]
                );
        $data = $request->all();

        $slug = $data['title'] . '-' . $data['author'];
        $post->slug = Str::slug($slug, '-');
        
        $post->update($data);

        return redirect()->route('admin.posts.show', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}
