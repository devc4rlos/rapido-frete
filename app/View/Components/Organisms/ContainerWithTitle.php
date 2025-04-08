<?php

namespace App\View\Components\Organisms;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class ContainerWithTitle extends BaseComponent
{
    public string $title;
    public bool $activeBackground;

    public function __construct(
        string $class = '',
        string $title = '',
        bool $activeBackground = false,
    )
    {
        parent::__construct($class);
        $this->title = $title;
        $this->activeBackground = $activeBackground;
    }

    public function render(): View
    {
        return view('components.organisms.container-with-title');
    }
}
