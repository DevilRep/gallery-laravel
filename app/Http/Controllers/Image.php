<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Image extends Controller
{
    public function __invoke() {
        return view('test');
    }
}
