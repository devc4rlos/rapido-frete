<?php

namespace App\View\Components\Molecules;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class FooterCardList extends BaseComponent
{
    public string $title;

    public function __construct(
        string $class = '',
        string $title = '',
    )
    {
        parent::__construct($class);
        $this->title = $title;
    }

    public function render(): View
    {
        return view('components.molecules.footer-card-list');
    }
}
