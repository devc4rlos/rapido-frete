<?php

namespace App\View\Components\Organisms;

use App\Services\ConfigService;
use App\View\BaseComponent;
use App\View\Trait\LinkRequestQuoteTrait;
use Illuminate\Contracts\View\View;

class PopupWhatsapp extends BaseComponent
{
    use LinkRequestQuoteTrait;

    private ConfigService $service;

    public function __construct(ConfigService $service, string $class = '')
    {
        parent::__construct($class);
        $this->service = $service;
    }

    public function render(): View
    {
        return view('components.organisms.popup-whatsapp');
    }
}
