<?php

namespace App\View\Components\Molecules\Home;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class TimelineStep extends BaseComponent
{
    public string $id;
    public string $title;
    public string $text;
    public string $icon;
    public bool $reverse;

    public function __construct(
        string $class = '',
        string $id = '',
        string $title = '',
        string $text = '',
        string $icon = '',
        bool $reverse = false,
    )
    {
        parent::__construct($class);
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
        $this->icon = $icon;
        $this->reverse = $reverse;
    }

    public function render(): View
    {
        return view('components.molecules.home.timeline-step');
    }
}
