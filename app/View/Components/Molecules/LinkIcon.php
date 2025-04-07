<?php

namespace App\View\Components\Molecules;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class LinkIcon extends BaseComponent
{
    public string $icon;
    public string $href;
    public string $target;

    public function __construct(
        string $class = '',
        string $icon = '',
        string $href = '',
        string $target = '_self',
    )
    {
        parent::__construct($class);
        $this->icon = $icon;
        $this->href = $href;
        $this->target = $target;
    }

    public function render(): View
    {
        return view('components.molecules.link-icon');
    }
}
