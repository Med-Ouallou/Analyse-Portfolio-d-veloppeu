<?php

namespace App\Data;

class ProjectsData
{
    public static function getAll()
    {
        return [
            [
                'id' => 1,
                'title' => 'E-Commerce Platform',
                'description' => 'A full-featured online shopping platform with payment integration and inventory management',
                'image' => 'https://images.unsplash.com/photo-1557821552-17105176677c?w=600&h=400&fit=crop',
                'github_link' => 'https://github.com/johndoe/ecommerce',
                'demo_link' => 'https://example.com/demo1',
                'start_date' => '2023-01-15',
                'end_date' => '2023-06-30',
                'technologies' => ['React', 'Node.js', 'MongoDB', 'Stripe']
            ],
            [
                'id' => 2,
                'title' => 'Task Management App',
                'description' => 'Collaborative task management tool for teams with real-time updates',
                'image' => 'https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?w=600&h=400&fit=crop',
                'github_link' => 'https://github.com/johndoe/taskmanager',
                'demo_link' => 'https://example.com/demo2',
                'start_date' => '2023-07-01',
                'end_date' => '2023-10-15',
                'technologies' => ['React', 'Firebase', 'Tailwind CSS']
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
                'technologies' => ['React', 'JavaScript', 'Chart.js']
            ]
        ];
    }

    public static function find($id)
    {
        $projects = self::getAll();
        foreach ($projects as $project) {
            if ($project['id'] == $id) {
                return $project;
            }
        }
        return null;
    }
}