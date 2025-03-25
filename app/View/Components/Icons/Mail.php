<?php

namespace App\View\Components\Icons;

use Illuminate\View\View;

class Mail extends IconFontAwesome
{
    public function render(): View
    {
        return view('components.icons.mail');
    }
}
