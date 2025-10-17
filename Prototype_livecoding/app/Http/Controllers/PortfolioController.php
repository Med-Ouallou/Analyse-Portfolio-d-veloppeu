<?php

namespace App\Http\Controllers;

use App\Services\DeveloperService;

class PortfolioController extends Controller
{
    public function index(){

        $developerService = new DeveloperService();

        $developer = $developerService->getinfo();
        return view('home', compact('developer'));
    }
}
