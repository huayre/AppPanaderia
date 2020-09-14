<?php


namespace App\Repository;


use App\Color;
use App\Image;
use App\Size;

class ImageRepository implements BaseRepository
{

    public function all()
    {
        return Image::all();
    }

    public function create($data)
    {
        Image::create($data);
    }

    public function update($data, $id)
    {
        $Category=Image::find($id);
        $Category->Update($data);
    }

    public function delete($id)
    {
        $Category=Image::find($id);
        $Category->delete();
    }

    public function find($id)
    {
        return Image::find($id);
    }



}
