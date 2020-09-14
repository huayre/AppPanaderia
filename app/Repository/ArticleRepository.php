<?php


namespace App\Repository;



use App\Article;
use App\Color;
use App\Size;

class ArticleRepository
{
    public function all()
    {
        return Article::with('categorie')->orderBy('created_at','desc')->get();
    }

    public function create($data)
    {

       $article= Article::create($data);

    }

    public function update($data, $id)
    {
        $article=Article::find($id);
        $article->Update($data->all());
        $contador=0;
        $article->sizes()->detach();
        while ($contador<count($data->size)){
            $article->sizes()->attach($data->size[$contador]);
            $contador++;
        }
    }

    public function delete($id)
    {
        $Category=Article::find($id);
        $Category->delete();
    }

    public function find($id)
    {
        return Article::find($id);
    }
    //metodos adicionales
    public function getListArticleSubcategorie($id){

        $ListArticles=Article::with('photos')->where('subcategory_id',$id)->paginate(12);

        return $ListArticles;
    }

    public function GetArticulosMasVendidos(){
        $ListArticles=Article::with('photos')->get();
        return $ListArticles;
    }
    public function findArticle($id)
    {
        return Article::with('photos','colors')->find($id);
    }
    public  function allSizes(){
        return Size::all();
    }
    public  function listArticleInteresSubcaptegories($subcategory_id){
        return Article::with('photos')->where('subcategory_id',$subcategory_id)->get();
    }



}
