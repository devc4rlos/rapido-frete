<?php

namespace App\View\Components\Organisms\Home;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class FaqList extends BaseComponent
{
    public function render(): View
    {
        return view('components.organisms.home.faq-list');
    }
}
