<?php


namespace App\Repository;


use App\Photo;

class PhotoRepository implements BaseRepository
{
    public function all()
    {
        return Photo::all();
    }

    public function create($data)
    {
     return   Photo::create($data);
    }

    public function update($data, $id)
    {
        $Category=Photo::find($id);
        $Category->Update($data);
    }

    public function delete($id)
    {
        $Category=Photo::find($id);
        $Category->delete();
    }

    public function find($id)
    {
        return Photo::find($id);
    }

    public  function listSizes(){
        return Size::all();
    }

    public function listPhotos($color_id){
       return  $ListPhotos=Photo::where('color_id',$color_id)->get();
    }

}
