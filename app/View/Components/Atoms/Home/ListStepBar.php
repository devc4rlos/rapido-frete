<?php

namespace App\View\Components\Atoms\Home;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class ListStepBar extends BaseComponent
{
    public function render(): View
    {
        return view('components.atoms.home.list-step-bar');
    }
}
