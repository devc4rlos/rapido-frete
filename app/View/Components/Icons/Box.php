<?php

namespace App\View\Components\Icons;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Box extends IconFontAwesome
{
    public function render(): View
    {
        return view('components.icons.box');
    }
}
