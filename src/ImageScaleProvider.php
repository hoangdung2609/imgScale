<?php

namespace hoangdung\imagescale;

//use App\Console\Commands\ScaleImage;
use Illuminate\Support\ServiceProvider;
use hoangdung\imagescale\ImageScale;

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
        $this->publishes([
            __DIR__.'/config/imagescale.php' => config_path('imagescale.php'),
        ]);
    }
}
