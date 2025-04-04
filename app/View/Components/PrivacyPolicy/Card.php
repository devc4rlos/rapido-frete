<?php

namespace App\View\Components\PrivacyPolicy;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public function render(): View
    {
        return view('components.privacy-policy.card');
    }
}
