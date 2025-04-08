<?php

namespace App\View\Components\Molecules\Home;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class AboutFeatureList extends BaseComponent
{
    public function render(): View
    {
        return view('components.molecules.home.about-feature-list');
    }
}
