<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        /*Passando apenas uma variavel*/
        $Nome = 'Pedro <span style="color: red;">Lazari</span>';
        //return view('pages.about')->with('nome', $Nome);

        /*Passando bem mais que uma variavel*/
        return view('pages.about')->with([
            'nome' => 'Pedro',
            'Idade' => '18 Anos'
        ]);
    }
}
