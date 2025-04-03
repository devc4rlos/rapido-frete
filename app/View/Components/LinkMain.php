<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LinkMain extends Component
{
    public function render(): View
    {
        return view('components.link-main');
    }
}
