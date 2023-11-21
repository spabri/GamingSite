<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Article::create(
            [
                'title' => $request->input('title'),
                'category' => $request->input('category'),
                'user_id' => Auth::id(),
                'body' => $request->input('body'),
                'img' => $request->file('img')->store('public/images')
            ]
        );
        return redirect(route('articles.create'))->with('message', 'Articolo inserito con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        if ($request->file('img')) {
            $img= $request->file('img')->store('public/images');
        } else {
            $img = $article->img;
        }
        $article->update(
            [
                'title' => $request->title,
                'category' => $request->category,
                'author' => Auth::user()->name,
                'body' => $request->body,
                'img' => $img,
            ]
        );
        return redirect(route('articles.create'))->with('message', 'Articolo aggiornato');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('articles.index'))->with('message',"Articolo eliminato");
    }
}
