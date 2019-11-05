<?php namespace hoangdung\imagescale;

use hoangdung\imagescale\ImageScale;

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
