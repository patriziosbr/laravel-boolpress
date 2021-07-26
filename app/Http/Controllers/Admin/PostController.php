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
        $data = $request->all();

        //add validate([])
        $validated = $request->validate(
            [
                'title' => 'required|max:255',
                'author' => 'required|max:255',
                // 'slug' => 'required|max:255',
                'content' => 'required',
                'date' => 'required'
            ]
        );

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
        //$post = Post::findOrfail($id);
        // return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
