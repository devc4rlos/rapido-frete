<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PopupWhatsapp extends Component
{
    public function render(): View
    {
        return view('components.popup-whatsapp');
    }
}
