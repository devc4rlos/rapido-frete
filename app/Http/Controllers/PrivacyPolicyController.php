<?php

namespace App\Http\Controllers;

use App\Services\ConfigService;
use App\Utils\TelefoneFormatter;
use Illuminate\View\View;

class PrivacyPolicyController extends Controller
{
    private ConfigService $config;

    public function __construct(ConfigService $config)
    {
        $this->config = $config;
    }

    public function __invoke(): View
    {
        return view('privacy-policy', [
            'email' => $this->config->get('email.self'),
            'address' => $this->config->getAddressFake(),
            'phone' => TelefoneFormatter::formatter($this->config->get('phone.full')),
        ]);
    }
}
