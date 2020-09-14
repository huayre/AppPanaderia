<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use App\Repository\ArticleRepository;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{

    public function index(){
        $ListArticle=Article::whereColumn('stock','<=','alert')->get();
        return view('App.Admin.home.home')->with(compact('ListArticle'));
    }
}
