<?php

namespace App\View\Components\Organisms\Home;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class ServicesFeature extends BaseComponent
{
    public string $title;
    public string $description;
    public string $image;
    public string $href;
    public bool $reverse;

    public function __construct(
        string $class = '',
        string $title = '',
        string $description = '',
        string $image = '',
        string $href = '',
        bool $reverse = false,
    )
    {
        parent::__construct($class);
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->href = $href;
        $this->reverse = $reverse;
    }

    public function render(): View
    {
        return view('components.organisms.home.services-feature');
    }
}
