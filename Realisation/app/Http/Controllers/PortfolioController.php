<?php

namespace App\Http\Controllers;
use App\Data\DeveloperData;
use App\Data\TechnologyData;
use App\Data\ProjectsData;



class PortfolioController extends Controller
{
    protected $developer;
    protected $projectDetails;
    protected $projectData;

    public function __construct(DeveloperData $developer,ProjectsData $projectData,TechnologyData $technologyData)
    {
        $this->developer = $developer;
        $this->technologyData = $technologyData;
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
        $projects = $this->projectData->getAll();
        return view('projects', compact('projects'));
    }

    public function projectDetails($id) {
        $project = $this->projectData->getProjectById($id);
        return view('project-details', compact('project'));
    }
}