<?php

namespace App\View\Components\Molecules\Home;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class AboutFeature extends BaseComponent
{
    public string $title;
    public string $text;
    public string $icon;

    public function __construct(
        string $class = '',
        string $title = '',
        string $text = '',
        string $icon = '',
    )
    {
        parent::__construct($class);
        $this->title = $title;
        $this->text = $text;
        $this->icon = $icon;
    }

    public function render(): View
    {
        return view('components.molecules.home.about-feature');
    }
}
