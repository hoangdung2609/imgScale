<h2>Image Scale</h2>

A package that helps you resize and optimize an image.  

<h4>Installation</h4>

```shell script
composer require hoangdung/imagescale --dev
```

Copy the package config to your local config with the publish command:

```shell script
php artisan vendor:publish --provider="hoangdung\imagescale\ImageScaleProvider"
````

<h4>Usage</h4>

````php
ImageScale::imageScale($imageFileObject, $optionSize, $customWidth, $customHeight);
````








