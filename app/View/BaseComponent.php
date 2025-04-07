<?php

namespace App\View;

abstract class BaseComponent extends \Illuminate\View\Component
{
    public string $class;

    public function __construct(string $class = '')
    {
        $this->class = $class;
    }
}
