<?php

namespace App\View\Components\Molecules\Home;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class TimelineStepInformation extends BaseComponent
{
    public string $id;
    public string $title;
    public string $text;
    public bool $reverse;

    public function __construct(
        string $class = '',
        string $id = '',
        string $title = '',
        string $text = '',
        bool $reverse = false,
    )
    {
        parent::__construct($class);
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
        $this->reverse = $reverse;
    }

    public function render(): View
    {
        return view('components.molecules.home.timeline-step-information');
    }
}
