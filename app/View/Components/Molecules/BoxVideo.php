<?php

namespace App\View\Components\Molecules;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class BoxVideo extends BaseComponent
{
    public string $classVideo;
    public string $poster;
    public array $files;
    public bool $reverse;

    public function __construct(
        string $class = '',
        string $classVideo = '',
        string $poster = '',
        array $files = [],
        bool $reverse = false,
    )
    {
        parent::__construct($class);
        $this->classVideo = $classVideo;
        $this->poster = $poster;
        $this->files = $files;
        $this->reverse = $reverse;
    }

    public function render(): View
    {
        return view('components.molecules.box-video');
    }
}
