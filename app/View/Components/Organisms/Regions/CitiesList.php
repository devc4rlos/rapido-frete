<?php

namespace App\View\Components\Organisms\Regions;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class CitiesList extends BaseComponent
{
    public string $state;
    public array $cities;

    public function __construct(
        string $class = '',
        string $state = '',
        array $cities = [],
    )
    {
        parent::__construct($class);
        $this->state = $state;
        $this->cities = $cities;
    }

    public function render(): View
    {
        return view('components.organisms.regions.cities-list');
    }
}
