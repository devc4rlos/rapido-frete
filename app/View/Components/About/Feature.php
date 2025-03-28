<?php

namespace App\View\Components\About;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Feature extends Component
{
    public function render(): View
    {
        return view('components.about.feature');
    }
}
