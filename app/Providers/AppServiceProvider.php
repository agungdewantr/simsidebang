<?php

namespace App\Providers;
use App\harga;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
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
      // $harga = new harga;
      //   View::share($harga->harga);
      Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
    }
}
