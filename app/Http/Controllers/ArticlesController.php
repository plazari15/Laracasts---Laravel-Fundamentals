<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index(){
        $Articles = Article::all();

        return view('articles.index', compact('Articles'));
       // return view('articles.index')->with('Articles', $Article); //Isso e o mesmo que a funçao acima

    }

    public function show($id){
        $Article = Article::findOrFail($id);


        return view('articles.show', compact('Article'));
    }

    /**
     * Controller para chamada de Create
     */
    public function create(){
        return view('articles.create');
    }
}
