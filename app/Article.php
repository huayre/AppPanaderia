<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['name','category_id','price','alert','stock'];

    public function categorie(){
        return $this->belongsTo(Category::class,'category_id');
    }


}


