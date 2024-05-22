<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\Relation;

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
        View::composer('*', function ($view) {
            if (session()->has('admin')) {
                $data = User::find(session()->get('admin')['id']);
                $view->with('data', $data);
            } elseif (session()->has('user')) {
                $data = User::find(session()->get('user')['id']);
                $view->with('data', $data);
            }else{
                return view('user.login');
            }
        });
    }
}
