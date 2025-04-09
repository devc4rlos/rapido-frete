<?php

namespace App\View\Components\Organisms\Regions;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class Cities extends BaseComponent
{
    public function render(): View
    {
        return view('components.organisms.regions.cities');
    }
}
