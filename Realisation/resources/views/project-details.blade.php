@extends('layouts.app')

@section('title', 'Project Details - Mohamed Ouallou')

@section('content')
@php
$projects = [
    1 => [
        'title' => 'E-Commerce Platform',
        'image' => 'https://images.unsplash.com/photo-1557821552-17105176677c?w=600&h=400&fit=crop',
        'description' => 'A full-featured online shopping platform with payment integration and inventory management',
        'date' => 'January 2023 - June 2023',
        'tech' => ['React', 'Node.js', 'MongoDB', 'Stripe'],
        'demo' => 'https://example.com/demo1',
        'code' => 'https://github.com/johndoe/ecommerce'
    ],
    2 => [
        'title' => 'Task Management App',
        'image' => 'https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?w=600&h=400&fit=crop',
        'description' => 'Collaborative task management tool for teams with real-time updates',
        'date' => 'July 2023 - October 2023',
        'tech' => ['React', 'Firebase', 'Tailwind CSS'],
        'demo' => 'https://example.com/demo2',
        'code' => 'https://github.com/johndoe/taskmanager'
    ],
    3 => [
        'title' => 'Weather Dashboard',
        'image' => 'https://images.unsplash.com/photo-1592210454359-9043f067919b?w=600&h=400&fit=crop',
        'description' => 'Real-time weather information with interactive maps and data visualization',
        'date' => 'November 2023 - January 2024',
        'tech' => ['React', 'JavaScript', 'Chart.js'],
        'demo' => 'https://example.com/demo3',
        'code' => 'https://github.com/johndoe/weather'
    ],
];
$project = $projects[$id] ?? null;
@endphp

@if($project)
<div class="max-w-4xl mx-auto px-4 py-16">
    <a href="{{ route('projects') }}" class="mb-6 text-blue-600 hover:text-blue-700 flex items-center gap-2">
        ← Back to Projects
    </a>
    <img src="{{ $project['image'] }}" class="w-full h-64 md:h-96 object-cover rounded-lg mb-8">
    <h1 class="text-4xl font-bold mb-4">{{ $id['title'] }}</h1>
    <p class="text-gray-600 text-lg mb-4">{{ $project['date'] }}</p>
    <div class="flex flex-wrap gap-2 mb-6">
        @foreach($project['tech'] as $tech)
            <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-semibold">{{ $tech }}</span>
        @endforeach
    </div>
    <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
        <h2 class="text-2xl font-bold mb-4">Project Description</h2>
        <p class="text-gray-700 text-lg">{{ $project['description'] }}</p>
    </div>
    <div class="flex gap-4">
        <a href="{{ $project['demo'] }}" target="_blank" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">View Demo</a>
        <a href="{{ $project['code'] }}" target="_blank" class="border-2 border-gray-800 text-gray-800 px-6 py-3 rounded-lg hover:bg-gray-50 transition-colors">View Code</a>
    </div>
</div>
@else
<p class="text-center text-gray-600 mt-20">Project not found.</p>
@endif
@endsection
