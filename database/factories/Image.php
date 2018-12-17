<?php

use Faker\Generator as Faker;
use App\Image;
use Illuminate\Http\File;

$factory->define(Image::class, function (Faker $faker) {
    $file = new File($faker->image(
        '/tmp',
        $faker->numberBetween(
            config('gallery.seed.size.min'),
            config('gallery.seed.size.max')
        ),
        $faker->numberBetween(
            config('gallery.seed.size.min'),
            config('gallery.seed.size.max')
        )
    ));
    $filename = Storage::putFile(
        'public',
        $file
    );
    return [
        'filename' => $filename
    ];
});
