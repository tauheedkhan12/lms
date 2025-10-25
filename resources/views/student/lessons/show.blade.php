@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $lesson->title }}</h2>
    <p>{{ $lesson->description }}</p>

    @if($lesson->video_url)
        <video width="640" height="360" controls>
            <source src="{{ asset('storage/' . $lesson->video_url) }}" type="video/mp4">
        </video>
    @endif

    <div class="mt-3">
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back to Course</a>
    </div>
</div>
@endsection
