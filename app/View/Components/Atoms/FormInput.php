<?php

namespace App\View\Components\Atoms;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class FormInput extends BaseComponent
{
    public string $type;

    public function __construct(
        string $class = '',
        string $type = 'text',
    )
    {
        parent::__construct($class);
        $this->type = $type;
    }

    public function render(): View
    {
        return view('components.atoms.form-input');
    }
}
