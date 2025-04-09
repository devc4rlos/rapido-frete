<?php

namespace App\View\Components\Molecules;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class ContactInformationLink extends BaseComponent
{
    public string $text;
    public string $href;
    public string $icon;

    public function __construct(
        string $class = '',
        string $text = '',
        string $href = '',
        string $icon = '',
    )
    {
        parent::__construct($class);
        $this->text = $text;
        $this->href = $href;
        $this->icon = $icon;
    }

    public function render(): View
    {
        return view('components.molecules.contact-information-link');
    }
}
