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
        '2xl' => 'text-2xl',
        '3xl' => 'text-3xl',
    ];

    public string $size;

    public function __construct(string $size = 'sm')
    {
        $this->size = $this->listSize[$size] ?? $this->listSize['sm'];
    }
}
