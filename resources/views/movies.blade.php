@extends('layouts.main')

@section('content')
    <h1>Hello world</h1>
    <div class="alert alert-danger">Bootstrap test</div>
    <div class="bg-red-500">Tailwind test</div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

     <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($movies as $movie)
            <div class="bg-white shadow-md rounded-lg overflow-hidden border border-gray-200">
                @if($movie->poster_url)
                    <img src="{{ $movie->poster_url }}" alt="{{ $movie->name }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gray-300 flex items-center justify-center text-gray-800">
                        No Poster
                    </div>
                @endif

                <div class="p-4">
                    <h2 class="text-xl font-semibold">{{ $movie->name }}</h2>
                    <p class="text-gray-600 text-sm mb-2">{{ $movie->release_year }} • {{ $movie->genre }}</p>
                    <p class="text-gray-700 text-sm mb-4 line-clamp-3">{{ $movie->description }}</p>

                    <div class="flex justify-between text-sm">
                        <span class="font-medium">🎥 {{ $movie->director ?? 'Unknown' }}</span>
                        <span class="bg-blue-500 text-white px-2 py-1 rounded">{{ $movie->rating }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if($movies->isEmpty())
        <p class="text-gray-500 text-center mt-4">No movies added yet</p>
    @endif

@endsection
   