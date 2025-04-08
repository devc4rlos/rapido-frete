<?php

namespace App\View\Components\Molecules\Home;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class ServicesFeatureInformation extends BaseComponent
{
    public string $title;
    public string $description;
    public string $href;

    public function __construct(
        string $class = '',
        string $title = '',
        string $description = '',
        string $href = '',
    )
    {
        parent::__construct($class);
        $this->title = $title;
        $this->description = $description;
        $this->href = $href;
    }

    public function render(): View
    {
        return view('components.molecules.home.services-feature-information');
    }
}
