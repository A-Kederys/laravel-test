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
@endsection
   