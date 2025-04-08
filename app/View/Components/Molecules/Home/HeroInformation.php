<?php

namespace App\View\Components\Molecules\Home;

use App\Services\ConfigService;
use App\View\BaseComponent;
use App\View\Trait\LinkRequestQuoteTrait;
use Illuminate\Contracts\View\View;

class HeroInformation extends BaseComponent
{
    use LinkRequestQuoteTrait;

    public function __construct(
        ConfigService $service,
        string $class = '',
    )
    {
        $this->service = $service;
        parent::__construct($class);
    }

    public function render(): View
    {
        return view('components.molecules.home.hero-information');
    }
}
