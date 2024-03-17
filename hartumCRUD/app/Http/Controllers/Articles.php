<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;

class Articles extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }
    public function create(){
        return view('article.create');
    }
    public function store(ArticleRequest $request){
        $article = new Article();
        $article->name = $request->name;
        $article->description = $request->description;
        $article->price = $request->price;
        $article->published = isset($request->published) ? 1 : 0;
        $article->save();
        return redirect()->route('article.index');
    }
    public function edit(Article $article){
        return view('article.edit', compact('article'));
    }
    public function update(ArticleRequest $request, Article $article){
        $article->update($request->all());
        return redirect()->route('article.index');
    }
    public function show(Article $article){
        return view('article.show', compact('article'));
    }
    public function destroy(Article $article){
        $article->delete();
        return redirect()->route('article.index');
    }
}
