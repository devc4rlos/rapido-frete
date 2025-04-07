<?php

namespace App\View\Components\Organisms;

use App\Services\ConfigService;
use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class TopBarInformation extends BaseComponent
{
    private ConfigService $service;

    public function __construct(ConfigService $service, string $class = '')
    {
        parent::__construct($class);
        $this->service = $service;
    }

    public function getUrlWhatsapp(): string
    {
        return $this->service->getUrlWhatsapp();
    }

    public function getTextWhatsapp(): string
    {
        return $this->service->getTextWhatsapp();
    }

    public function getUrlEmail(): string
    {
        return $this->service->getUrlEmail();
    }

    public function getTextEmail(): string
    {
        return $this->service->getTextEmail();
    }

    public function render(): View
    {
        return view('components.organisms.top-bar-information');
    }
}
