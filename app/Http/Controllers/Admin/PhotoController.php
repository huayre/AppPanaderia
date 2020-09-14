<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\PhotoRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $PhotoRepository;
    public function __construct(PhotoRepository $PhotoRepository)
    {
        $this->PhotoRepository=$PhotoRepository;
    }

    public function index()
    {
        //
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
         $article_id=$request->article_id;
         $Photo= $this->PhotoRepository->create($request->only('url','color_id'));
          if ($request->file('url')){
              $path=Storage::disk('public')->put('images/catalogo',$request->file('url'));
              $Photo->fill(['url'=>asset($path)])->save();
          }
          session()->flash('success','La imagen fue registrado correctamente');
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
    public function destroy($id_photo,$article_id)
    {
        $this->PhotoRepository->delete($id_photo);
        toastr()->success('EL color fue eliminado correctamente!');

        return redirect()->route('colorindex',$article_id);

    }
}
