<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\ArticleRepository;
use App\Repository\IngresoRepository;
use Illuminate\Http\Request;

class IngresoController extends Controller
{

    private $ArticleRepository;
    private $IngresoRepository;
    public function __construct(ArticleRepository $ArticleRepository,IngresoRepository $IngresoRepository)
    {
        $this->ArticleRepository=$ArticleRepository;
        $this->IngresoRepository=$IngresoRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ListIngreso=$this->IngresoRepository->all();
        return  view('App.Admin.ingreso.lista',compact('ListIngreso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ListaProductos=$this->ArticleRepository->all();
        return  view('App.Admin.ingreso.index',compact('ListaProductos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->IngresoRepository->create($request);

        toastr()->success('El ingreso fue registrado correctamente!');
        return redirect()->route('ingreso.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
