<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Pengaturan;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer('partials.footer', function ($view) {

            $pengaturan = Pengaturan::first();

            $view->with('pengaturan', $pengaturan);

        });
    }
}