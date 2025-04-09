<?php

namespace App\View\Components\Organisms\Home;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class Comments extends BaseComponent
{
    public function render(): View
    {
        return view('components.organisms.home.comments');
    }
}
