<?php

namespace App\Providers;
use App\harga;
use Illuminate\Support\ServiceProvider;
// parsing data buat semua view
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $harga = new harga;
        View::share($harga->harga);
    }
}
