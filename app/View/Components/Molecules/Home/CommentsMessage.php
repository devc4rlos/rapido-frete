<?php

namespace App\View\Components\Molecules\Home;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class CommentsMessage extends BaseComponent
{
    public string $name;
    public string $location;
    public string $text;
    public int $evaluation;

    public function __construct(
        string $class = '',
        string $name = '',
        string $location = '',
        string $text = '',
        int $evaluation = 1,
    )
    {
        parent::__construct($class);
        $this->name = $name;
        $this->location = $location;
        $this->text = $text;
        $this->evaluation = $evaluation;
    }

    public function render(): View
    {
        return view('components.molecules.home.comments-message');
    }
}
