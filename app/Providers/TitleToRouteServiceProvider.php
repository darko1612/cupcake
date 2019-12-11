<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Page;
class TitleToRouteServiceProvider extends ServiceProvider
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
        view()->composer('*', function () {
            $pages = Page::all()->sortBy('position', 1);
            $page_titles = [];
            foreach ($pages as $page) {
                $page_titles[] = lcfirst(str_replace(" ", "_", $page->page_title));
            }

            view()->share('page_titles', $page_titles);
        });
    }
}
