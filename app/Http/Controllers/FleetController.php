<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class FleetController extends Controller
{
    public function __invoke(): View
    {
        return view('fleet');
    }
}
