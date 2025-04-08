<?php

namespace App\View\Components\Templates\Home;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class Hero extends BaseComponent
{
    public function render(): View
    {
        return view('components.templates.home.hero');
    }
}
