<?php

namespace App\View\Components\Atoms;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class SubtitleSection extends BaseComponent
{
    public function render(): View
    {
        return view('components.atoms.subtitle-section');
    }
}
