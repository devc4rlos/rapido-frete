<?php

namespace App\View\Components\Molecules;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class FormGroup extends BaseComponent
{
    public function render(): View
    {
        return view('components.molecules.form-group');
    }
}
