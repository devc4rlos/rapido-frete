<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContainerWithTitle extends Component
{
    public function render(): View
    {
        return view('components.container-with-title');
    }
}
