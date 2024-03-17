<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }
    
    public function create(){
        return view('post.create');
    }
    
    public function store(Request $request){
        Post::create($request->all());
        //--- mensaje flash incrustado
        return redirect()->route('post.index')->with('success', 'Post created successfully.');
    }

    public function edit(Post $post){
        return view('post.edit', compact('post'));
    }
    
    public function update(Request $request, Post $post){
        $post->update($request->all());
        //--- mensaje flash incrustado
        return redirect()->route('post.index')->with('success', 'Post updated successfully.');
    }
    
    public function show(Post $post){
        return view('post.show', compact('post'));
    }
    
    public function destroy(Post $post){
        $post->delete();
        //--- mensaje flash incrustado
        return redirect()->route('post.index')->with('danger', 'Post deleted successfully.');
    }

}
