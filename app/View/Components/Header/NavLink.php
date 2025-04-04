<?php

namespace App\View\Components\Header;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\URL;
use Illuminate\View\Component;

class NavLink extends Component
{
    public string $href;

    public function __construct(string $href = '')
    {
        $this->href = $href;
    }

    public function checkActive(): bool
    {
        return URL::current() == $this->href;
    }

    public function render(): View
    {
        return view('components.header.nav-link');
    }
}
