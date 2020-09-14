<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Repository\CarruselRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarruselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $CarruselRespository;
    public function __construct(CarruselRepository $CarruselRespository)
    {
        $this->CarruselRespository=$CarruselRespository;
    }

    public function index()
    {
     $ListCarrusel=$this->CarruselRespository->all();
     return view('App.Admin.carrusel.index',compact('ListCarrusel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('url')){
            $path=Storage::disk('public')->put('images/carrusel',$request->file('url'));
            $this->CarruselRespository->create(['url'=>asset($path)]);
        }
        toastr()->success('La imagen fue registrado correctamente!');
        return redirect()->route('carrusel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carrusel  $carrusel
     * @return \Illuminate\Http\Response
     */
    public function show(Carrusel $carrusel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrusel  $carrusel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrusel $carrusel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrusel  $carrusel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrusel $carrusel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrusel  $carrusel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->CarruselRespository->delete($id);
        toastr()->success('La imagen fue eliminado correctamente!');

        return redirect()->route('carrusel.index');
    }
}
