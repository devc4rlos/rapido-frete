<?php

namespace App\View\Components\Templates\Home;

use App\Services\ConfigService;
use App\View\BaseComponent;
use App\View\Trait\LinkRequestQuoteTrait;
use Illuminate\Contracts\View\View;

class Faq extends BaseComponent
{
    use LinkRequestQuoteTrait;

    private ConfigService $service;

    public function __construct(
        ConfigService $service,
        string $class = '',
    )
    {
        parent::__construct($class);
        $this->service = $service;
    }

    public function render(): View
    {
        return view('components.templates.home.faq');
    }
}
