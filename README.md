<h2>Image Scale</h2>

A package that helps you resize and optimize an image.  

<h4>Installation</h4>

```shell script
composer require hoangdung/imagescale --dev
```

Copy the package config to your local config with the publish command:

```shell script
php artisan vendor:publish --provider="Hoangdung\Imagescale\ImageScaleProvider"
````

<h4>Usage</h4>

````php
// parameter image file or url

$image = new ImageScale($imageFile)

$img->resizeWidthHeight(600, 600);

// large, medium, small

$img->resizeOption('small');

$image->save($path. $fileName));
````








