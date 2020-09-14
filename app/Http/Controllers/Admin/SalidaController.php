<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\ArticleRepository;
use App\Repository\SalidaRepository;
use Illuminate\Http\Request;

class SalidaController extends Controller
{
    private $SalidaRepository;
    private $ArticleRepository;
    public function __construct(SalidaRepository $SalidaRepository, ArticleRepository $ArticleRepository)
    {
     $this->SalidaRepository=$SalidaRepository;
     $this->ArticleRepository=$ArticleRepository;
    }

    public function index()
    {
        $ListaSalidas=$this->SalidaRepository->all();
        return view('App.Admin.salida.lista')->with(compact('ListaSalidas'));
    }

    public function create()
    {
        $ListaProductos=$this->ArticleRepository->all();
        return view('App.Admin.salida.index')->with(compact('ListaProductos'));
    }

    public function store(Request $request)
    {
        $this->SalidaRepository->create($request);
        return redirect()->route('salida.index');
    }
}
