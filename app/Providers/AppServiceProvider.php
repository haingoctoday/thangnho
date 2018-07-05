<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Info;
use App\Shopsystem;
use App\Popup;
use App\Chinhsach;

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
            $data_popup = Popup::where('trangthai',1)->first();
            $data_chinhsach = Chinhsach::all();
            $view->with(['s_info'=>$data_info,'data_cuahang'=>$data_cuahang,'data_popup'=>$data_popup,'data_chinhsach'=>$data_chinhsach]);

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
