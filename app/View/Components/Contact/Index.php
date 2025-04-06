<?php

namespace App\View\Components\Contact;

use App\Services\ConfigService;
use App\Utils\TelefoneFormatter;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Index extends Component
{
    private ConfigService $config;

    public function __construct(ConfigService $config)
    {
        $this->config = $config;
    }

    public function getUrlWhatsapp(): string
    {
        return $this->config->get('social_media.whatsapp.links.url');
    }

    public function getPhoneWhatsapp(): string
    {
        return TelefoneFormatter::formatter($this->config->get('social_media.whatsapp.phone_number'));
    }

    public function getUrlEmail(): string
    {
        return $this->config->get('email.url');
    }

    public function getTextEmail(): string
    {
        return $this->config->get('email.self');
    }

    public function getAddress(): string
    {
        return $this->config->getAddressFake();
    }

    public function render(): View
    {
        return view('components.contact.index');
    }
}
