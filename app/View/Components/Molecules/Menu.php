<?php

namespace App\View\Components\Molecules;

use App\Services\ConfigService;
use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class Menu extends BaseComponent
{
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

    public function getLinkRequestQuote(): string
    {
        return $this->service->getUrlWhatsapp();
    }

    public function render(): View
    {
        return view('components.molecules.menu');
    }
}
