<?php

namespace App\View\Components\Template;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BoxAndText extends Component
{
    public function render(): View
    {
        return view('components.template.box-and-text');
    }
}
