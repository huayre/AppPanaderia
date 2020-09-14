<?php


namespace App\Repository;


use App\Size;
use App\Subcategory;

class SubCategoryRepository
{
    public function all()
    {
        return Subcategory::with('category')->get();
    }

    public function create($data)
    {
        Subcategory::create($data);
    }

    public function update($data, $id)
    {
        $Category=Subcategory::find($id);
        $Category->Update($data);
    }

    public function delete($id)
    {
        $Category=Subcategory::find($id);
        $Category->delete();
    }

    public function find($id)
    {
        return Subcategory::find($id);
    }

}
