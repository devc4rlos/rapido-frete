<?php

namespace App\View\Components\Header;

use App\Services\ConfigService;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    public bool $isVertical;
    private ConfigService $config;

    public function __construct(ConfigService $config, $isVertical = false)
    {
        $this->isVertical = $isVertical;
        $this->config = $config;
    }

    public function getLink(): string
    {
        return $this->config->get('social_media.whatsapp.links.url');
    }

    public function render(): View
    {
        return view('components.header.menu');
    }
}
