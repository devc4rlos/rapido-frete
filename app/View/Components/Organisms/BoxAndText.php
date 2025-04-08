<?php

namespace App\View\Components\Organisms;

use App\Services\ConfigService;
use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class BoxAndText extends BaseComponent
{
    public string $title;
    public string $subtitle;
    public string $content;
    public string $footer;
    public bool $reverse;
    public bool $activeBackground;

    public function __construct(
        string $class = '',
        string $title = '',
        string $subtitle = '',
        string $content = '',
        string $footer = '',
        bool $reverse = false,
        bool $activeBackground = false,
    )
    {
        parent::__construct($class);
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->content = $content;
        $this->footer = $footer;
        $this->reverse = $reverse;
        $this->activeBackground = $activeBackground;
    }

    public function render(): View
    {
        return view('components.organisms.box-and-text');
    }
}
