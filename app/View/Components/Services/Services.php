<?php

namespace App\View\Components\Services;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Services extends Component
{
    public function render(): View
    {
        return view('components.services.index');
    }
}
