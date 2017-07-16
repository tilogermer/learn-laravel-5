<?php

namespace App\Http\Controllers;

use Auth;
use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use Carbon\Carbon;





class ArticlesController extends Controller
{
    public function index()
    {
    	$articles = Article::latest('published_at')->published()->get();

                
    	return view ('articles.index', compact('articles'));

    }

    public function show($id)
    {
    	
    	$article = Article::findOrFail($id);
    	

    	return view ('articles.show', compact('article'));

    }

    public function create()
    {
        $tags = \App\Tag::pluck('name', 'id');

        return view ('articles.create', compact('tags'));
    }


    public function store(ArticleRequest $request)
    {       
            //dd($request->input('tags'));

            $article = Auth::user()->articles()->create($request->all());

            $tagIDs = $request->input('tags');

            //$article = new Article($request->all());

            $article->tags()->attach($request->input('tags'));
            

            //Article::create($request->all());
            
            
            return redirect('articles');
    }


    public function edit($id)
    {
        $tags = \App\Tag::pluck('name', 'id');

        $article = Article::findOrFail($id);
        
        return view('articles.edit', compact('article', 'tags'));
    }

    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }
}






