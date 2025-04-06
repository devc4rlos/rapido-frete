<?php

namespace App\View\Components;

use App\Services\ConfigService;
use App\Utils\TelefoneFormatter;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    private ConfigService $config;

    public function __construct(ConfigService $config)
    {
        $this->config = $config;
    }

    public function getAddress(): string
    {
        return '220 Donnelly Groves Theresaburgh, AK 62589';
    }

    public function getTextEmail(): string
    {
        return $this->config->get('email.self');
    }

    public function getTextPhone(): string
    {
        return TelefoneFormatter::formatter($this->config->get('phone.full'));
    }

    public function getSocialMedia(): array
    {
        return array_filter($this->config->get('social_media'), function ($itemSocialMedia) {
            return isset($itemSocialMedia['text']);
        });
    }

    public function getYear(): string
    {
        return Date('Y');
    }

    public function render(): View
    {
        return view('components.footer');
    }
}
