<?php

namespace App\View\Components\Organisms;

use App\Services\ConfigService;
use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class MessageWarning extends BaseComponent
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

    public function getUrlPortfolioAuthor(): string
    {
        return $this->service->getUrlPortfolio();
    }

    public function getTextName(): string
    {
        return $this->service->getTextName();
    }

    public function render(): View
    {
        return view('components.organisms.message-warning');
    }
}
