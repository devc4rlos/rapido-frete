<?php

namespace App\View\Components\Box;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Video extends Component
{
    public function render(): View
    {
        return view('components.box.video');
    }
}
