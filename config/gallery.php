<?php

return [
    'seed' => [
        'size' => [
            'min' => env('GALLERY_SEED_SIZE_MIN', 400),
            'max' => env('GALLERY_SEED_SIZE_MAX', 1800)
        ],
        'count' => env('GALLERY_SEED_COUNT', 10)
    ]
];
