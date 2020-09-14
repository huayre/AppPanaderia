<?php

namespace App\Http\Controllers;

use App\Repository\ArticleRepository;
use App\Repository\CarruselRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $ArticleRepository;
    public function __construct(ArticleRepository $ArticleRepository)
    {
        $this->ArticleRepository=$ArticleRepository;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ListArticlesMasComprados=$this->ArticleRepository->GetArticulosMasVendidos();
        return view('App.Frond.welcome')->with(['ListArticlesMasComprados'=>$ListArticlesMasComprados]);
    }
}
