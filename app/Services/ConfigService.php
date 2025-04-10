<?php

namespace App\Services;

use App\Utils\TelefoneFormatter;

class ConfigService
{
    protected array $config = [];

    public function __construct()
    {
        $this->loadConfig();
    }

    protected function loadConfig(): void
    {
        $path = app_path('./../data.json');

        if (file_exists($path)) {
            $json = file_get_contents($path);
            $this->config = json_decode($json, true) ?? [];
        }
    }

    public function get(string $key, $default = null)
    {
        return data_get($this->config, $key, $default);
    }

    public function all(): array
    {
        return $this->config;
    }

    public function getAddressFake(): string
    {
        return '220 Donnelly Groves Theresaburgh, AK 62589';
    }

    public function getUrlWhatsapp(): string
    {
        return $this->get('social_media.whatsapp.links.url');
    }

    public function getTextWhatsapp(): string
    {
        return TelefoneFormatter::formatter($this->get('social_media.whatsapp.phone_number'));
    }

    public function getUrlEmail(): string
    {
        return $this->get('email.url');
    }

    public function getTextEmail(): string
    {
        return $this->get('email.self');
    }

    public function getUrlPortfolio(): string
    {
        return $this->get('websites.portfolio');
    }

    public function getSocialMedia(array $except = []): array
    {
        return array_filter($this->get('social_media'), function($nameMediaSocial) use ($except) {
            return !in_array($nameMediaSocial, $except);
        }, ARRAY_FILTER_USE_KEY);
    }
}
