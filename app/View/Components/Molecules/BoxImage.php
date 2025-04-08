<?php

namespace App\View\Components\Molecules;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class BoxImage extends BaseComponent
{
    public string $image;
    public string $classImage;
    public bool $reverse;

    public function __construct(
        string $class = '',
        string $image = '',
        string $classImage = '',
        bool $reverse = false,
    )
    {
        parent::__construct($class);
        $this->image = $image;
        $this->classImage = $classImage;
        $this->reverse = $reverse;
    }

    public function render(): View
    {
        return view('components.molecules.box-image');
    }
}
