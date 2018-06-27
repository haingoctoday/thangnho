<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Info;
use App\Shopsystem;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
  protected $data_info = '';
    public function boot()
    {
        //
      //  $data_info = '';
       
        view()->composer('*', function ($view) {
            $data_cuahang = Shopsystem::all();
            $data_info = Info::where('id',2)->first();
            $view->with(['s_info'=>$data_info,'data_cuahang'=>$data_cuahang]);

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
