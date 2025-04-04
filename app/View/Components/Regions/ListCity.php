<?php

namespace App\View\Components\Regions;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ListCity extends Component
{
    public function render(): View
    {
        return view('components.regions.list-city');
    }
}
