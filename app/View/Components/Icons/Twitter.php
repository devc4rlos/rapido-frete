<?php

namespace App\View\Components\Icons;

use Illuminate\Contracts\View\View;

class Twitter extends IconFontAwesome
{
    public function render(): View
    {
        return view('components.icons.twitter');
    }
}
