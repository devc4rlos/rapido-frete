<?php

namespace App\View\Components\Footer;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardList extends Component
{
    public function render(): View
    {
        return view('components.footer.card-list');
    }
}
