<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\FormRequestCategory;
use App\Repository\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $CategoryRepository;
    public function __construct(CategoryRepository $CategoryRepository)
    {
        $this->CategoryRepository=$CategoryRepository;
    }

    public function index()
    {
        $ListCategory=$this->CategoryRepository->all();
        return view('App.Admin.category.index')->with(['ListCategory'=>$ListCategory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('App.Admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormRequestCategory $request)
    {
     $this->CategoryRepository->create($request->validated());
     toastr()->success('La Categoría fue registrado correctamente!');
      return redirect()->route('category.index');
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
        $Category=$this->CategoryRepository->find($id);
        return view('App.Admin.category.edit')->with(['Category'=>$Category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormRequestCategory $request, $id)
    {
        $this->CategoryRepository->update($request->validated(),$id);
        toastr()->success('La Categoría fue actualizado correctamente!');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->CategoryRepository->delete($id);
        toastr()->success('La Categoría fue eliminado correctamente!');
        return redirect()->route('category.index');

    }
}
