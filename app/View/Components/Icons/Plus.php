<?php

namespace App\View\Components\Icons;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Plus extends IconFontAwesome
{
    public function render(): View
    {
        return view('components.icons.plus');
    }
}
