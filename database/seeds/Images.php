<?php

use Illuminate\Database\Seeder;
use App\Models\Image;

class Images extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Image::class, config('gallery.seed.count'))->create();
    }
}
