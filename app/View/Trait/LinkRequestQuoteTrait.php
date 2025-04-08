<?php

namespace App\View\Trait;

use App\Services\ConfigService;

trait LinkRequestQuoteTrait
{
    private ConfigService $service;

    public function getLinkRequestQuote(): string
    {
        return $this->service->getUrlWhatsapp();
    }
}
