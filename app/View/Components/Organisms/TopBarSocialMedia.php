<?php

namespace App\View\Components\Organisms;

use App\Services\ConfigService;
use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class TopBarSocialMedia extends BaseComponent
{
    private ConfigService $service;

    public function __construct(ConfigService $service, string $class = '')
    {
        parent::__construct($class);
        $this->service = $service;
    }

    public function getSocialMedia(): array
    {
        return $this->service->getSocialMedia();
    }

    public function render(): View
    {
        return view('components.organisms.top-bar-social-media');
    }
}
