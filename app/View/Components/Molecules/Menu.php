<?php

namespace App\View\Components\Molecules;

use App\Services\ConfigService;
use App\View\BaseComponent;
use App\View\Trait\LinkRequestQuoteTrait;
use Illuminate\Contracts\View\View;

class Menu extends BaseComponent
{
    use LinkRequestQuoteTrait;

    public bool $vertical;
    private ConfigService $service;

    public function __construct(
        ConfigService $service,
        string $class = '',
        bool $vertical = false,
    )
    {
        parent::__construct($class);
        $this->vertical = $vertical;
        $this->service = $service;
    }

    public function render(): View
    {
        return view('components.molecules.menu');
    }
}
