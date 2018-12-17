<?php

use Faker\Generator as Faker;
use App\Models\Image;
use Illuminate\Http\File;

$factory->define(Image::class, function (Faker $faker) {
    $filename = Storage::putFile(
        'public',
        new File($faker->image(
            '/tmp',
            $faker->numberBetween(
                config('gallery.seed.size.min'),
                config('gallery.seed.size.max')
            ),
            $faker->numberBetween(
                config('gallery.seed.size.min'),
                config('gallery.seed.size.max')
            )
        ))
    );
    return [
        'filename' => $filename
    ];
});
