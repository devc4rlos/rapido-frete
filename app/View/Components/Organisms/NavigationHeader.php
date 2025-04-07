<?php

namespace App\View\Components\Organisms;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class NavigationHeader extends BaseComponent
{
    public function render(): View
    {
        return view('components.organisms.navigation-header');
    }
}
