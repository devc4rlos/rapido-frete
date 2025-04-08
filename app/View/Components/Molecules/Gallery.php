<?php

namespace App\View\Components\Molecules;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class Gallery extends BaseComponent
{
    public array $images;

    public function __construct(
        string $class = '',
        array $images = [],
    )
    {
        parent::__construct($class);
        $this->images = $images;
    }

    public function render(): View
    {
        return view('components.molecules.gallery');
    }
}
