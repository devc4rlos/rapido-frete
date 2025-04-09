<?php

namespace App\View\Components\Atoms;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class FormControl extends BaseComponent
{
    public string $label;
    public string $input;

    public function __construct(
        string $class = '',
        string $label = '',
        string $input = '',
    )
    {
        parent::__construct($class);
        $this->label = $label;
        $this->input = $input;
    }

    public function render(): View
    {
        return view('components.atoms.form-control');
    }
}
