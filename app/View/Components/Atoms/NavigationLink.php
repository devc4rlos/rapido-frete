<?php

namespace App\View\Components\Atoms;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\URL;

class NavigationLink extends BaseComponent
{
    public string $href;

    public function __construct(
        string $class = '',
        string $href = '',
    )
    {
        parent::__construct($class);
        $this->href = $href;
    }

    public function checkActive(): bool
    {
        return URL::current() == $this->href;
    }

    public function render(): View
    {
        return view('components.atoms.navigation-link');
    }
}
