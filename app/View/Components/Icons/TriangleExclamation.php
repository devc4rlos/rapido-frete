<?php

namespace App\View\Components\Icons;

use Illuminate\Contracts\View\View;

class TriangleExclamation extends IconFontAwesome
{
    public function render(): View
    {
        return view('components.icons.triangle-exclamation');
    }
}
