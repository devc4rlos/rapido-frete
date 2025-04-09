<?php

namespace App\View\Components\Atoms;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class FormSelect extends BaseComponent
{
    public array $options;

    public function __construct(
        string $class = '',
        array $options = [],
    )
    {
        parent::__construct($class);
        $this->options = $options;
    }

    public function render(): View
    {
        return view('components.atoms.form-select');
    }
}
