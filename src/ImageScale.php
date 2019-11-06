<?php
namespace Hoangdung\Imagescale;

use Intervention\Image\ImageManagerStatic as Image;

class ImageScale
{
    public $image;

    public function __construct($imageFile)
    {
        $this->image = Image::make($imageFile);
    }

    public function resizeOption($option)
    {
        if ($option == config('imagescale.option_name.large')) {
            $this->image->resize($image->width() * config('imagescale.option_size.large'), $image->height() * config('imagescale.option_size.large'));
        } else if ($option == config('imagescale.option_name.medium')) {
            $this->image->resize($image->width() * config('imagescale.option_size.medium'), $image->height() * config('imagescale.option_size.medium'));
        } else if ($option == config('imagescale.option_name.small')) {
            $this->image->resize($image->width() * config('imagescale.option_size.small'), $image->height() * config('imagescale.option_size.small'));
        }

        return $this->image;
    }

    public function resizeWidthHeight($width, $height)
    {
        return $this->image->resize($width, $height);
    }

    public function save($path)
    {
        $mime = $this->image->mime();

        $this->image->save($path. '.'. substr($mime, strpos($mime, '/') + 1));
    }
}
