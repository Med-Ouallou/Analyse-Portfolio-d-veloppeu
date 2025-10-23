<?php

namespace App\Data;

class ProjectDetailsData
{
    public static function get($projectId)
    {
        $details = [
            1 => [
                'id' => 1,
                'title' => 'E-commerce Platform',
                'description' => 'A full-featured online shopping platform with payment integration and inventory management',
                'long_description' => 'Built a comprehensive e-commerce platform from scratch with features including user authentication, product management, shopping cart, order processing, and payment integration using Stripe. Implemented responsive design and optimized performance for mobile devices.',
                'image' => 'https://images.unsplash.com/photo-1557821552-17105176677c?w=600&h=400&fit=crop',
                'github_link' => 'https://github.com/johndoe/ecommerce',
                'demo_link' => 'https://example.com/demo1',
                'start_date' => '2023-01-15',
                'end_date' => '2023-06-30',
                'technologies' => ['React', 'Node.js', 'MongoDB', 'Stripe'],
                'features' => [
                    'User authentication and authorization',
                    'Product catalog with search and filters',
                    'Shopping cart and checkout process',
                    'Payment processing with Stripe',
                    'Admin dashboard for inventory management',
                    'Order tracking and email notifications'
                ]
            ],
            2 => [
                'id' => 2,
                'title' => 'Task Management App',
                'description' => 'Collaborative task management tool for teams with real-time updates',
                'long_description' => 'Developed a real-time collaborative task management application that helps teams organize their work efficiently. Features include real-time updates, drag-and-drop interfaces, team collaboration tools, and data visualization.',
                'image' => 'https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?w=600&h=400&fit=crop',
                'github_link' => 'https://github.com/johndoe/taskmanager',
                'demo_link' => 'https://example.com/demo2',
                'start_date' => '2023-07-01',
                'end_date' => '2023-10-15',
                'technologies' => ['React', 'Firebase', 'Tailwind CSS'],
                'features' => [
                    'Real-time collaboration with multiple users',
                    'Drag-and-drop task organization',
                    'Project boards and task lists',
                    'Team member assignments and notifications',
                    'Progress tracking and analytics',
                    'Mobile-responsive design'
                ]
            ],
            3 => [
                'id' => 3,
                'title' => 'Weather Dashboard',
                'description' => 'Real-time weather information with interactive maps and data visualization',
                'long_description' => 'Created an intuitive weather dashboard that displays current conditions, forecasts, and weather maps. Integrated multiple APIs for comprehensive weather data and implemented data visualization using Chart.js.',
                'image' => 'https://images.unsplash.com/photo-1592210454359-9043f067919b?w=600&h=400&fit=crop',
                'github_link' => 'https://github.com/johndoe/weather',
                'demo_link' => 'https://example.com/demo3',
                'start_date' => '2023-11-01',
                'end_date' => '2024-01-20',
                'technologies' => ['React', 'JavaScript', 'Chart.js'],
                'features' => [
                    'Current weather conditions and forecasts',
                    'Interactive weather maps',
                    'Search by city or location',
                    '7-day weather forecast',
                    'Weather alerts and notifications',
                    'Temperature and precipitation charts'
                ]
            ]
        ];

        return $details[$projectId] ?? null;
    }

    public static function getAll()
    {
        return [
            self::get(1),
            self::get(2),
            self::get(3)
        ];
    }
}