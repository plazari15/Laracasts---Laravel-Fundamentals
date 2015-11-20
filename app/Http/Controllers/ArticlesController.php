<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Request;
use App\Article;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
        //$Articles = Article::latest('published_at')->get(); //Esse metodo é facilitado pela classe
        $Articles = Article::orderby('published_at', 'desc')->get(); //Esse é algo mais manual

        return view('articles.index', compact('Articles'));
        // return view('articles.index')->with('Articles', $Article); //Isso e o mesmo que a funçao acima

    }

    public function show($id)
    {
        $Article = Article::findOrFail($id);


        return view('articles.show', compact('Article'));
    }

    /**
     * Controller para chamada de Create
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Controller para armazenar no banco de dados
     */
    public function store()
    {
        $input = Request::all();
        $input['published_at'] = Carbon::now();

        Article::create($input);

        return redirect('articles');
    }
}
