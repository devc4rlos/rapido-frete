<?php

namespace App\View\Components\Organisms;

use App\Services\ConfigService;
use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class NavigationFooter extends BaseComponent
{
    private ConfigService $service;

    public function __construct(
        ConfigService $service,
        string $class = '',
    )
    {
        parent::__construct($class);
        $this->service = $service;
    }

    public function getAddress(): string
    {
        return $this->service->getAddressFake();
    }

    public function getTextEmail(): string
    {
        return $this->service->getTextEmail();
    }

    public function getTextPhone(): string
    {
        return $this->service->getTextWhatsapp();
    }

    public function getSocialMedia(): array
    {
        return $this->service->getSocialMedia(['whatsapp']);
    }

    public function render(): View
    {
        return view('components.organisms.navigation-footer');
    }
}
