<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService;

class PortfolioController extends Controller
{
    protected $developerService;

    public function __construct(DeveloperService $developerService)
    {
        $this->developerService = $developerService;
    }

    public function index()
    {
        $developer = $this->developerService->getDeveloperInfo();
        return view('home', compact('developer'));
    }
}