<?php

namespace App\View\Components\Molecules;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class TextSmallWithIcon extends BaseComponent
{
    public function render(): View
    {
        return view('components.molecules.text-small-with-icon');
    }
}
