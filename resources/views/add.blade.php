@extends('layouts.main')

@section('content')
<div class="container">
    <h2 class="mb-4">Add a New Movie</h2>
    <form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Movie Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name') }}">
            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
            @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">Duration (minutes)</label>
            <input type="number" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" required value="{{ old('duration') }}">
            @error('duration') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="release_year" class="form-label">Release Year</label>
            <input type="number" class="form-control @error('release_year') is-invalid @enderror" id="release_year" name="release_year" required value="{{ old('release_year') }}">
            @error('release_year') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre" name="genre" value="{{ old('genre') }}">
            @error('genre') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="language" class="form-label">Language</label>
            <input type="text" class="form-control @error('language') is-invalid @enderror" id="language" name="language" value="{{ old('language') }}">
            @error('language') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="director" class="form-label">Director</label>
            <input type="text" class="form-control @error('director') is-invalid @enderror" id="director" name="director" value="{{ old('director') }}">
            @error('director') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="starring" class="form-label">Starring (comma-separated)</label>
            <input type="text" class="form-control @error('starring') is-invalid @enderror" id="starring" name="starring" value="{{ old('starring') }}">
            @error('starring') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="subtitles" class="form-label">Subtitles</label>
            <input type="text" class="form-control @error('subtitles') is-invalid @enderror" id="subtitles" name="subtitles" value="{{ old('subtitles') }}">
            @error('subtitles') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Age Rating</label>
            <select class="form-select @error('rating') is-invalid @enderror" id="rating" name="rating">
                <option value="N-7" {{ old('rating') == 'N-7' ? 'selected' : '' }}>N-7</option>
                <option value="N-13" {{ old('rating') == 'N-13' ? 'selected' : '' }}>N-13</option>
                <option value="N-16" {{ old('rating') == 'N-16' ? 'selected' : '' }}>N-16</option>
                <option value="N-18" {{ old('rating') == 'N-18' ? 'selected' : '' }}>N-18</option>
            </select>
            @error('rating') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="trailer_url" class="form-label">Trailer URL</label>
            <input type="text" class="form-control @error('trailer_url') is-invalid @enderror" id="trailer_url" name="trailer_url" value="{{ old('trailer_url') }}">
            @error('trailer_url') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="poster" class="form-label">Movie Poster</label>
            <input type="file" class="form-control @error('poster') is-invalid @enderror" id="poster" name="poster">
            @error('poster') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Add Movie</button>
    </form>
</div>
@endsection
   