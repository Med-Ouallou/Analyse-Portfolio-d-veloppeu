    @extends('layouts.app')

    @section('title', 'Project Details - Mohamed Ouallou')

    @section('content')
    @if($project)
    <div class="max-w-4xl mx-auto px-4 py-16">
        <a href="{{ route('projects') }}" class="mb-6 text-blue-600 hover:text-blue-700 flex items-center gap-2">
            Back to Projects
        </a>

        <img src="{{ $project['image'] }}" class="w-full h-64 md:h-96 object-cover rounded-lg mb-8">

        <h1 class="text-4xl font-bold mb-4">{{ $project['title'] }}</h1>
        <p class="text-gray-600 text-lg mb-4">
            {{ $project['start_date'] }} &nbsp / &nbsp   {{ $project['end_date'] }}
        </p>

        <div class="flex flex-wrap gap-2 mb-6">
            @foreach($project['technologies'] as $tech)
                <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-semibold">{{ $tech['name'] }}</span>
            @endforeach
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold mb-4">Project Description</h2>
            <p class="text-gray-700 text-lg">{{ $project['description'] }}</p>
        </div>

        <div class="flex gap-4">
            <a href="{{ $project['demo_link'] }}" target="_blank" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">View Demo</a>
            <a href="{{ $project['github_link'] }}" target="_blank" class="border-2 border-gray-800 text-gray-800 px-6 py-3 rounded-lg hover:bg-gray-50 transition-colors">View Code</a>
        </div>
    </div>
    @else
    <p class="text-center text-gray-600 mt-20">Project not found.</p>
    @endif
    @endsection
