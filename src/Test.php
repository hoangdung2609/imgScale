<?php

namespace hoangdung\imagescale;

use hoangdung\imagescale\ImageScale;

class Test {

    public function resizeImageByWidtHeight()
    {
        $img = new ImageScale('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdgnmf-cAzcn3SlCtKdAp3RIr8V4Qbs9UboBxFYlMFLXty5xdvCQ&s');

        $img->resizeWidthHeight(600, 600);

        $img->save(public_path('test_scale_img/'. str_random(10)));
    }

    public function resizeImageByOption()
    {
        $img = new ImageScale('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdgnmf-cAzcn3SlCtKdAp3RIr8V4Qbs9UboBxFYlMFLXty5xdvCQ&s');

        $img->resizeOption('small');

        $img->save(public_path('test_scale_img/'. str_random(10)));
    }
}
