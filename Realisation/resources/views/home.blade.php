@extends('layouts.app')

@section('title', 'Home - Mohamed Ouallou')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-20">
    <div class="flex flex-col md:flex-row items-center gap-12">
        <div class="flex-1">
            <h1 class="text-5xl md:text-6xl font-bold mb-4">Hi, I'm <span class="text-blue-600">{{$developer['first_name']}} {{$developer['last_name']}}</span></h1>
            <p class="text-xl md:text-2xl text-gray-600 mb-8">{{$developer['title']}}</p>
            <p class="text-lg text-gray-700 mb-8">{{$developer['bio']}}</p>
            <div class="flex gap-4">
                <a href="{{ route('projects') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">View Projects</a>
                <a href="{{ route('about') }}" class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg hover:bg-blue-50 transition-colors">About Me</a>
            </div>
        </div>
        <div class="flex-1 flex justify-center">
            <img src="{{ asset('images/img1.jpg') }}" alt="Profile" class="w-64 h-64 md:w-80 md:h-80 rounded-full object-cover shadow-2xl">
        </div>
    </div>
</div>
@endsection
