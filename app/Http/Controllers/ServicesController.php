<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ServicesController extends Controller
{
    public function index(): View
    {
        return view('services.index');
    }

    public function residentialMoving(): View
    {
        return view('services.residential-moving');
    }

    public function commercialMoving(): View
    {
        return view('services.commercial-moving');
    }

    public function fastFreight(): View
    {
        return view('services.fast-freight');
    }

    public function furnitureAssembly(): View
    {
        return view('services.furniture-assembly');
    }

    public function professionalPackaging(): View
    {
        return view('services.professional-packaging');
    }

    public function interstateMoving(): View
    {
        return view('services.interstate-moving');
    }
}
