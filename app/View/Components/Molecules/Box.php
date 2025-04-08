<?php

namespace App\View\Components\Molecules;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class Box extends BaseComponent
{
    public bool $reverse;

    public function __construct(
        string $class = '',
        bool $reverse = false,
    )
    {
        parent::__construct($class);
        $this->reverse = $reverse;
    }

    public function render(): View
    {
        return view('components.molecules.box');
    }
}
