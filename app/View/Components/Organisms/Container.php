<?php

namespace App\View\Components\Organisms;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class Container extends BaseComponent
{
    public bool $activeBackground;
    public bool $activeSpacing;

    public function __construct(
        string $class = '',
        bool $activeBackground = false,
        bool $activeSpacing = true,
    )
    {
        parent::__construct($class);
        $this->activeBackground = $activeBackground;
        $this->activeSpacing = $activeSpacing;
    }

    public function render(): View
    {
        return view('components.organisms.container');
    }
}
