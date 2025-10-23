<?php

namespace App\Http\Controllers;
use App\Data\DeveloperData;
use App\Data\ProjectDetailsData;
use App\Data\ProjectsData;



class PortfolioController extends Controller
{
    protected $developer;
    protected $projectDetails;
    protected $projectData;

    public function __construct(DeveloperData $developer,ProjectDetailsData $projectDetails,ProjectsData $projectData)
    {
        $this->developer = $developer;
        $this->projectDetails = $projectDetails;
        $this->projectData = $projectData;
    }

    public function home()
    {
        $developer = $this->developer->DevInfo();
        return view('home', compact('developer'));
    }

    public function about() {
        $developer = $this->developer->DevInfo();
        return view('about', compact('developer'));
    }

    public function projects() {
        $projectData = $this->projectData->getAll();
        return view('projects', compact('projectData'));
    }
}