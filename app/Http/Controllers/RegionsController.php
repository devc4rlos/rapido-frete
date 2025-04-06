<?php

namespace App\Http\Controllers;

use App\Services\ConfigService;
use Illuminate\View\View;

class RegionsController extends Controller
{
    private ConfigService $config;

    public function __construct(ConfigService $config)
    {
       $this->config = $config;
    }

    public function __invoke(): View
    {
        return view('regions', [
            'link' => $this->config->get('social_media.whatsapp.links.url'),
        ]);
    }
}
