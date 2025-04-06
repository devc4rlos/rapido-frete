<?php

namespace App\View\Components;

use App\Services\ConfigService;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServicesSingle extends Component
{
    private ConfigService $config;

    public function __construct(ConfigService $config)
    {
        $this->config = $config;
    }

    public function getLink(): string
    {
        return $this->config->get('social_media.whatsapp.links.url');
    }

    public function render(): View
    {
        return view('components.services-single');
    }
}
