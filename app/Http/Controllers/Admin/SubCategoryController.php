<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormRequestSubcategory;
use App\Repository\CategoryRepository;
use App\Repository\SubCategoryRepository;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $CategoryRepository;
    private $SubCategoryRepository;
    public function __construct(CategoryRepository $CategoryRepository,SubCategoryRepository $SubCategoryRepository)
    {
        $this->CategoryRepository=$CategoryRepository;
        $this->SubCategoryRepository=$SubCategoryRepository;
    }

    public function index()
    {
        $SubCategory=$this->SubCategoryRepository->all();
        return view('App.Admin.subcategory.index')->with(['SubCategory'=>$SubCategory]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ListCategory=$this->CategoryRepository->all();
        return view('App.Admin.subcategory.create')->with(['ListCategory'=>$ListCategory]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormRequestSubcategory $request)
    {
        $this->SubCategoryRepository->create($request->validated());
        toastr()->success('La SubCategoría fue registrado correctamente!');
        return redirect()->route('subcategory.index');
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
        $SubCategory=$this->SubCategoryRepository->find($id);
        $ListCategory=$this->CategoryRepository->all();
        return view('App.Admin.subcategory.edit')->with(['SubCategory'=>$SubCategory,'ListCategory'=>$ListCategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormRequestSubcategory $request, $id)
    {
        $this->SubCategoryRepository->update($request->validated(),$id);
        toastr()->success('La SubCategoría fue actualizado correctamente!');
        return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->SubCategoryRepository->delete($id);
        toastr()->success('La SubCategoría fue eliminado correctamente!');
        return redirect()->route('subcategory.index');

    }
}
