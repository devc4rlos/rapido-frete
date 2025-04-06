<?php

namespace App\Services;

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
}
