<?php

namespace App\View\Components\Contact;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LinkInfo extends Component
{
    public function render(): View
    {
        return view('components.contact.link-info');
    }
}
