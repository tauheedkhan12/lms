@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Create Course</h2>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="block">Course Title</label>
            <input type="text" name="title" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-3">
            <label class="block">Description</label>
            <textarea name="description" class="w-full border rounded p-2" required></textarea>
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">Create</button>
    </form>
</div>
@endsection
