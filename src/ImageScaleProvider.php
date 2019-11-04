<?php

namespace hoangdung\imagescale;

use App\Console\Commands\ScaleImage;
use Illuminate\Support\ServiceProvider;
use ImageScale;

class ImageScaleProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('ImageScale', function () {
            return new ImageScale();
        });
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}
