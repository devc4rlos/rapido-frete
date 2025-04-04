<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class RegionsController extends Controller
{
    public function __invoke(): View
    {
        return view('regions');
    }
}
