<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;
use App\Category;
use App\Tag;

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
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // dump($request);
        //add validate([])
        $request->validate(
            [
                'title' => 'required',
                'author' => 'required',
                //'slug' => 'required|max:255',
                'content' => 'required',
                'post_date' => 'required',
                'tags' => 'exists:tags,id' //validaizone nel caso di modifica value da ispeziona elemento
            ]
        );

        $data = $request->all();

        // dd($data); 
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
        $newPost->category_id = $data['category_id'];
        
        $newPost->save();

        if(array_key_exists('tags', $data)) {
            $newPost->tags()->attach($data["tags"]);       
        }

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
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
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
                'title' => 'required|max:255',
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

        
        if(array_key_exists('tags', $data)) {
            $post->tags()->sync($data["tags"]);	
        } else {
            // $post->tags()->detach($data[]);
            $post->tags()->detach();
        }

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
