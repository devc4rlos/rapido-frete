<?php

namespace App\View\Components\ListStep;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Index extends Component
{
    public function render(): View
    {
        return view('components.list-step.index');
    }
}
