<?php
namespace hoangdung\imagescale;

use Intervention\Image\ImageManagerStatic as Image;

class ImageScale
{
    public function __construct()
    {
    }

    public function imageScale($imageFile, $optionSize = 'large', $width = null, $height = null)
    {
        $image = Image::make($imageFile);

//        Resize Image
        if (is_numeric($width) || is_numeric($height)) {
            $image = $image->resize($width, $height);
        } else {
            if ($optionSize == config('imagescale.option_size.medium')) {
                $image = $image->resize($image->width() * 2/3, $image->height() * 2/3);
            } else if ($optionSize == config('imagescale.option_size.small')) {
                $image = $image->resize($image->width() * 1/3, $image->height() * 1/3);
            }
        }

        return $image;
    }
}
