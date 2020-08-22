<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helper\cartHelper;
use App\Models\Config;
use App\Models\Product;

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
        view()->composer('*',function ($view)
        {
            $pro_search=Product::select('id','image','name','price','sale_price')->get();
            $view->with([
                'cart' => new CartHelper(),
                'pro_search' => $pro_search,
            ]);
        });
    }
}
