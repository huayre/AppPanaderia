<?php


namespace App\Repository;


use App\Carrusel;

class CarruselRepository implements BaseRepository
{
    public  function  all()
    {
        return Carrusel::all();
    }

    public function create($data)
    {
        Carrusel::create($data);
    }

    public function update($data, $id)
    {
        $Category=Carrusel::find($id);
        $Category->Update($data);
    }

    public function delete($id)
    {
        $Category=Carrusel::find($id);
        $Category->delete();
    }

    public function find($id)
    {
        return Carrusel::find($id);
    }

    public static function ListaCarrusel(){
        return Carrusel::all('url');
    }



}
