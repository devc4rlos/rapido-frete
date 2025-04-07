<?php

namespace App\View\Components\Atoms;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class LinkMain extends BaseComponent
{
    public string $href;
    public bool $activeWidth;

    public function __construct(
        string $class = '',
        string $href = '',
        bool $activeWidth = true,
    )
    {
        parent::__construct($class);
        $this->href = $href;
        $this->activeWidth = $activeWidth;
    }

    public function render(): View
    {
        return view('components.atoms.link-main');
    }
}
