<?php

namespace App\View\Components\Icons;

use Illuminate\Contracts\View\View;

class TruckFast extends IconFontAwesome
{
    public function render(): View
    {
        return view('components.icons.truck-fast');
    }
}
