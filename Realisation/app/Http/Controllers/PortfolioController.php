<?php

namespace App\Http\Controllers;
use App\Data\DeveloperData;
use App\Data\projectDetailsData;
use App\Data\projectData;



class PortfolioController extends Controller
{
    protected $developer;

    public function __construct(DeveloperData $developer,projectDetailsData $projectDetails,projectData $projectData)
    {
        $this->developer = $developer;
        $this->projectDetails = $projectDetails;
    }

    public function home()
    {
        $developer = $this->developer->DevInfo();
        return view('home', compact('developer'));
    }

    public function about() {
        $projectDetails = $this->projectDetails->DevInfo();
        return view('about', compact('projectDetails'));
    }

    public function projects() {
        $projectData = $this->projectData->DevInfo();
        return view('projects', compact('projectData'));
    }
}

/*
class PortfolioController extends Controller
{
    public function home()
    {
        $developer = $this->DeveloperData->DevInfo()
        return view('home', compact('developer'));
    }

    public function about() {
        return view('about');
    }

    public function projects() {
        return view('projects');
    }

    public function projectDetails($id) {
        return view('project-details', compact('id'));
    }

}
*/