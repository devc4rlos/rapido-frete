<?php

namespace App\View\Components\Molecules;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class FooterCopyright extends BaseComponent
{
    public function getYear(): string
    {
        return Date('Y');
    }

    public function render(): View
    {
        return view('components.molecules.footer-copyright');
    }
}
