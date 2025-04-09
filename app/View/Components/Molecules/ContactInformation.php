<?php

namespace App\View\Components\Molecules;

use App\Services\ConfigService;
use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class ContactInformation extends BaseComponent
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

    public function getPhoneWhatsapp(): string
    {
        return $this->service->getTextWhatsapp();
    }

    public function getUrlWhatsapp(): string
    {
        return $this->service->getUrlWhatsapp();
    }

    public function getTextEmail(): string
    {
        return $this->service->getTextEmail();
    }

    public function getUrlEmail(): string
    {
        return $this->service->getUrlEmail();
    }

    public function getAddress(): string
    {
        return $this->service->getAddressFake();
    }

    public function render(): View
    {
        return view('components.molecules.contact-information');
    }
}
