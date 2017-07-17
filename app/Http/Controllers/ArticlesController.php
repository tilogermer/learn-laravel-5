<?php

namespace App\Http\Controllers;

use Auth;
use App\Article;
use App\Tag;
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

    public function show(Article $article)
    {
    	

    	return view ('articles.show', compact('article'));

    }

    public function create()
    {
        $tags = Tag::pluck('name', 'id');

        return view ('articles.create', compact('tags'));
    }


    public function store(ArticleRequest $request)
    {       
            //dd($request->input('tags'));

            $this->createArticle($request);

            
            
            //$article->tags()->attach($request->input('tag_list'));

            

            //$article = new Article($request->all());

            
            

            //Article::create($request->all());

            
            
            
            return redirect('articles');
    }


    public function edit(Article $article)
    {
        $tags = \App\Tag::pluck('name', 'id');

        //$article = Article::findOrFail($id);
        
        return view('articles.edit', compact('article', 'tags'));
    }

    public function update(ArticleRequest $request, Article $article)
    {
        //$article = Article::findOrFail($id);

        $article->update($request->all());

        $this->syncTags($article, $request->input('tag_list'));

        return redirect('articles');
    }

    private function syncTags(Article $article, array $tags)
    {
        $article->tags()->sync($tags);
    }

    private function createArticle(ArticleRequest $request)
    {
        $article = Auth::user()->articles()->create($request->all());

        $this->syncTags($article, $request->input('tag_list'));

        return $article;
    }
}






