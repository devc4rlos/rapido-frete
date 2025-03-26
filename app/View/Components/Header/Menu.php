<?php

namespace App\View\Components\Header;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    public function render(): View
    {
        return view('components.header.menu');
    }
}
