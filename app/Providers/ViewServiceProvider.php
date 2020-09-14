<?php

namespace App\Providers;
use App\Repository\CarruselRepository;
use App\Repository\CategoryRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */


    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['layouts.portada.index','App.Frond.welcome'],function ($view){
            $ListCarrusel=CarruselRepository::ListaCarrusel();
            $ListCategory=CategoryRepository::CategoriesActives();

            $view->with(['ListCarrusel'=>$ListCarrusel,'ListCategory'=>$ListCategory]);
        });
    }
}
