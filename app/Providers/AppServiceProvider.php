<?php

namespace App\Providers;

use App\Groupproduct;
use App\Typeproduct;
use App\Product;
use App\Brand;
use App\Blog;
use App\Customer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        view()->composer([
            'partials.navuser', 'front_end.index', 'groupproducts.detail', 'typeproducts.detail', 'products.detail',
            'products.detailweb', 'productpromotions.index', 'productpromotions.shows', 'newproducts.newproducts',
            'cart.checkout', 'partials.footer', 'brands.detail', 'cart.update', 'cart.view', 'auth.register',
            'auth.login', 'blogs.detailweb', 'blogs.listblog', 'customers.edit', 'products.search', 'products.contact'
        ], function ($view) {
            $groupproducts = Groupproduct::all();
            $typeproducts = Typeproduct::all();
            $products = Product::all();
            $productpromotions = Product::where('promotion', '>', 0)->get();
            $newproducts = Product::whereMonth('created_at', '=', Carbon::now()->month)->get();
            $brands = Brand::all();
            $blogs = Blog::all()->take(3);
            $customers = Customer::all();
            $view->with([
                'groupproducts' => $groupproducts, 'typeproducts' => $typeproducts,
                'products' => $products, 'productpromotions' => $productpromotions, 'newproducts' => $newproducts,
                'brands' => $brands, 'blogs' => $blogs,  'customers' => $customers
            ]);
        });
    }
}
