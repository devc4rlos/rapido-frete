<?php

namespace App\View\Components\Molecules;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class PrivacyPolicyList extends BaseComponent
{
    public function render(): View
    {
        return view('components.molecules.privacy-policy-list');
    }
}
