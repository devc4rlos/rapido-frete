<?php

namespace App\View\Components\Icons;

use Illuminate\Contracts\View\View;

class Telegram extends IconFontAwesome
{
    public function render(): View
    {
        return view('components.icons.telegram');
    }
}
