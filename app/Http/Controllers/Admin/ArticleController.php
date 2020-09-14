<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormRequestArticle;
use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $ArticleRepository;
    private $CategoryRepository;
    public function __construct(ArticleRepository $ArticleRepository,CategoryRepository $CategoryRepository)
    {
        $this->ArticleRepository=$ArticleRepository;
        $this->CategoryRepository=$CategoryRepository;
    }

    public function index()
    {
        $ListArticle=$this->ArticleRepository->all();
        return view('App.Admin.article.index',compact('ListArticle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ListaCategorias=$this->CategoryRepository->all();
        return view('App.Admin.article.create')->with(['ListaCategorias'=>$ListaCategorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormRequestArticle $request)
    {
      $this->ArticleRepository->create($request->validated());
      toastr()->success('El producto fue registrado correctamente!');
      return redirect()->route('article.index');

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
        $Article=$this->ArticleRepository->find($id);
        $ListaCategorias=$this->CategoryRepository->all();
        $ListSizes=$this->ArticleRepository->allSizes();
        return view('App.Admin.article.edit')->with(['Article'=>$Article,'ListaCategorias'=>$ListaCategorias,'ListSizes'=>$ListSizes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormRequestArticle $request, $id)
    {
        $this->ArticleRepository->update($request,$id);
        toastr()->success('El producto fue actualizado correctamente!');
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->ArticleRepository->delete($id);
        toastr()->success('El producto fue eliminado correctamente!');
        return redirect()->route('article.index');
    }
}
