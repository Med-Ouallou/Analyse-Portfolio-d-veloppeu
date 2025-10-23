@extends('layouts.app')

@section('title', 'About - Mohamed Ouallou')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-6">
    <h1 class="text-4xl md:text-5xl font-bold mb-8"></h1>
    <div class="bg-white rounded-lg shadow-lg p-8">
        <div class="flex flex-col md:flex-row gap-8">
            <img src="{{asset($developer['profile_picture'])}}" alt="Profile" class="w-48 h-58 rounded-lg object-cover shadow-lg">
            <div class="flex-1">
                <h2 class="text-2xl font-bold mb-2">{{$developer['first_name']}} {{$developer['last_name']}}</h2>
                <p class="text-xl text-blue-600 mb-4">{{$developer['title']}}</p>
                <p class="text-gray-700 mb-10">{{$developer['about_me']}}</p>
                <div class="space-y-2">
                    <a href="mailto:Mouallou279@gmail.com" class="flex items-center gap-3 text-gray-700 hover:text-blue-600 transition-colors group">
                        <span class="flex items-center justify-center w-10 h-10 bg-blue-100 text-blue-600 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <span class="font-medium">{{$developer['email']}}</span>
                    </a>
                    <a href="tel:+212612345678" class="flex items-center gap-3 text-gray-700 hover:text-blue-600 transition-colors group">
                        <span class="flex items-center justify-center w-10 h-10 bg-blue-100 text-blue-600 rounded-full group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <i class="fa-solid fa-phone"></i>
                        </span>
                        <span class="font-medium">{{$developer['phone']}}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection