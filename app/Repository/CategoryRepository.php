<?php


namespace App\Repository;


use App\Category;

class CategoryRepository implements BaseRepository
{


    public function all()
    {
       return Category::all();
    }

    public function create($data)
    {
        Category::create($data);
    }

    public function update($data, $id)
    {
        $Category=Category::find($id);
        $Category->Update($data);
    }

    public function delete($id)
    {
        $Category=Category::find($id);
        $Category->delete();
    }

    public function find($id)
    {
        return Category::find($id);
    }
    //metodos adicionales
    public  static function CategoriesActives(){
        return Category::with(['subcategories'=>function($query){
            $query->where('state','1')->select('name','id','category_id');
        }])->where('state','1')->get(['name','id']);
    }
}
