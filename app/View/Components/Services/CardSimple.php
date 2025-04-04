<?php

namespace App\View\Components\Services;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardSimple extends Component
{
    public function render(): View
    {
        return view('components.services.card-simple');
    }
}
