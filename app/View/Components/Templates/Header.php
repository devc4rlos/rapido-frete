<?php

namespace App\View\Components\Templates;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class Header extends BaseComponent
{
    public function render(): View
    {
        return view('components.templates.header');
    }
}
