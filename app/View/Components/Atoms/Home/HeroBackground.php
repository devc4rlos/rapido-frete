<?php

namespace App\View\Components\Atoms\Home;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class HeroBackground extends BaseComponent
{
    public function render(): View
    {
        return view('components.atoms.home.hero-background');
    }
}
