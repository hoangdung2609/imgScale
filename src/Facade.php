<?php namespace Hoangdung\Imagescale;

use Hoangdung\Imagescale\ImageScale;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return ImageScale::class;
    }
}
