@extends('layouts.app')

@section('title', 'Projects - Mohamed Ouallou')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-16">
    <h1 class="text-4xl md:text-5xl font-bold mb-8">My Projects</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- Project 1 -->
        <a href="{{ route('project.details', 1) }}" class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
            <img src="https://images.unsplash.com/photo-1557821552-17105176677c?w=600&h=400&fit=crop" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">E-Commerce Platform</h3>
                <p class="text-gray-600 mb-3">A full-featured online shopping platform with payment integration and inventory management</p>
            </div>
        </a>

        <!-- Project 2 -->
        <a href="{{ route('project.details', 2) }}" class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
            <img src="https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?w=600&h=400&fit=crop" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">Task Management App</h3>
                <p class="text-gray-600 mb-3">Collaborative task management tool for teams with real-time updates</p>
            </div>
        </a>

        <!-- Project 3 -->
        <a href="{{ route('project.details', 3) }}" class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
            <img src="https://images.unsplash.com/photo-1592210454359-9043f067919b?w=600&h=400&fit=crop" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">Weather Dashboard</h3>
                <p class="text-gray-600 mb-3">Real-time weather information with interactive maps and data visualization</p>
            </div>
        </a>

    </div>
</div>
@endsection
