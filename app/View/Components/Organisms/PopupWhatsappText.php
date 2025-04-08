<?php

namespace App\View\Components\Organisms;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class PopupWhatsappText extends BaseComponent
{
    public string $href;

    public function __construct(
        string $class = '',
        string $href = '',
    )
    {
        parent::__construct($class);
        $this->href = $href;
    }

    public function render(): View
    {
        return view('components.organisms.popup-whatsapp-text');
    }
}
