<?php

namespace App\View\Components\Comments;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public function render(): View
    {
        return view('components.comments.card');
    }
}
