<?php

namespace App\View\Components\Atoms;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class FooterLink extends BaseComponent
{
    public string $href;
    public string $text;

    public function __construct(
        string $class = '',
        string $href = '',
        string $text = '',
    )
    {
        parent::__construct($class);
        $this->href = $href;
        $this->text = $text;
    }

    public function render(): View
    {
        return view('components.atoms.footer-link');
    }
}
