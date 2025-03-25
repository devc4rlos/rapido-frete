<?php

namespace App\View\Components\Icons;

use Illuminate\Contracts\View\View;

class CalendarDays extends IconFontAwesome
{
    public function render(): View
    {
        return view('components.icons.calendar-days');
    }
}
