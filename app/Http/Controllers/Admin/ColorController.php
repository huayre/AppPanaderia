<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\ColorRepository;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $ColorRepository;
    public function __construct(ColorRepository $ColorRepository)
    {
        $this->ColorRepository=$ColorRepository;
    }

    public function index($id_article)
    {
        $Colors= $this->ColorRepository->listColor($id_article);;
        return view('App.Admin.color.index',['Colors'=>$Colors,'id_article'=>$id_article]);
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
        $this->ColorRepository->create($request->only('name','article_id'));
        $article_id=$request->article_id;
        toastr()->success('EL color fue creado correctamente!');
        return redirect()->route('colorindex',$article_id);
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
        dd($id);
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
    public function destroy($color_id,$article_id)
    {
        $this->ColorRepository->delete($color_id);
        toastr()->success('EL color fue eliminado correctamente!');
        return redirect()->route('colorindex',$article_id);
    }
}
