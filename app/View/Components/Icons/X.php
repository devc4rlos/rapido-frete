<?php

namespace App\View\Components\Icons;

use Illuminate\Contracts\View\View;

class X extends IconFontAwesome
{
    public function render(): View
    {
        return view('components.icons.x');
    }
}
