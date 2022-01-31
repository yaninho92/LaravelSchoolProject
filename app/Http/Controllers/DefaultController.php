<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{

    public function index(){
        $posts =[
            'Mon premier article',
            'Mon second article',
            'Mon troisième article',
            'Mon quatrième article',
        ];
        return view('articles',compact('posts'));
    }

    public function show($id){
        $posts =[
            1=>'Détails du premier article',
            2=>'Détails du second article',
            3=>'Détails du troisième article',
            4=>'Détails du quatrième article'
        ];
        $post = $posts[$id] ?? "pas d'articles";

        return view('article',[
            'post'=>$post
        ]);
    }
}
