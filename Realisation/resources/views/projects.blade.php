@extends('layouts.app')

@section('title', 'Projects - Mohamed Ouallou')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-16">
    <h1 class="text-4xl md:text-5xl font-bold mb-8">My Projects</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach($projects as $project)
        <a href="{{ route('project.details', $project['id']) }}" class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
            <img src="{{ $project['image'] }}" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2">{{ $project['title'] }}</h3>
                <p class="text-gray-600 mb-3">{{ $project['description'] }}</p>
            </div>
        </a>
        @endforeach

    </div>
</div>
@endsection
