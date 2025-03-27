<?php

namespace App\View\Components\Icons;

use Illuminate\Contracts\View\View;

class City extends IconFontAwesome
{
    public function render(): View
    {
        return view('components.icons.city');
    }
}
