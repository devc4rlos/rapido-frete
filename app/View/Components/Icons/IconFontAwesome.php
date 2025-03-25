<?php

namespace App\View\Components\Icons;

use Illuminate\View\Component;

abstract class IconFontAwesome extends Component
{
    private array $listSize = [
        'sm' => 'text-sm',
        'md' => 'text-md',
        'lg' => 'text-lg',
        'xl' => 'text-xl',
    ];

    public string $size;

    public function __construct(string $size = 'sm')
    {
        $this->size = $this->listSize[$size] ?? $this->listSize['sm'];
    }
}
