<?php

namespace App\View\Components\Atoms;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class ButtonMain extends BaseComponent
{
    public string $type;
    public bool $activeWidth;

    public function __construct(
        string $class = '',
        string $type = 'button',
        bool $activeWidth = true,
    )
    {
        parent::__construct($class);
        $this->type = $type;
        $this->activeWidth = $activeWidth;
    }

    public function render(): View
    {
        return view('components.atoms.button-main');
    }
}
