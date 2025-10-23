<?php

namespace App\Data;
use App\Data\TechnologyData;


class ProjectsData
{
    protected $technologyData;

    public function __construct(TechnologyData $technologyData)
    {
        $this->technologyData = $technologyData;
    }

    public static function getAll()
    {
        return [
            [
                'id' => 1,
                'title' => 'Grocery Management System',
                'description' => 'A full-featured shopping platform with inventory management and user authentication ',
                'image' => 'images/groceryStore.jpg',
                'github_link' => 'https://github.com/johndoe/ecommerce',
                'demo_link' => 'https://example.com/demo1',
                'start_date' => '2023-01-15',
                'end_date' => '2023-06-30',
                'technologies' => [4, 5, 6 , 8],
            ],
            [
                'id' => 2,
                'title' => 'Shose Store App',
                'description' => 'A Shose store application with friendly UI and seamless user experience   ',
                'image' => 'images/nikeStore.png',
                'github_link' => 'https://github.com/johndoe/taskmanager',
                'demo_link' => 'https://example.com/demo2',
                'start_date' => '2023-07-01',
                'end_date' => '2023-10-15',
                'technologies' => [2, 8],
            ],
            [
                'id' => 3,
                'title' => 'Weather Dashboard',
                'description' => 'Real-time weather information with interactive maps and data visualization',
                'image' => 'https://images.unsplash.com/photo-1592210454359-9043f067919b?w=600&h=400&fit=crop',
                'github_link' => 'https://github.com/johndoe/weather',
                'demo_link' => 'https://example.com/demo3',
                'start_date' => '2023-11-01',
                'end_date' => '2024-01-20',
                'technologies' => [1, 2, 4],
            ]
        ];

    }

    public function getProjectById($id)
    {
        $projects = $this->getAll();
        foreach ($projects as $project) {
            if ($project['id'] == $id) {
                $project['technologies'] = $this->technologyData->getByIds($project['technologies']);
                return $project;
            }
        }
        return null;
    }

}