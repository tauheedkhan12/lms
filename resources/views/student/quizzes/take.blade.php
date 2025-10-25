@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $quiz->title }}</h2>

    <form action="{{ route('student.quizzes.submit', [$quiz->course_id, $quiz->id]) }}" method="POST">
        @csrf
        @foreach($quiz->questions as $question)
            <div class="mb-3">
                <h5>{{ $loop->iteration }}. {{ $question->question_text }}</h5>
                @foreach(['option_a', 'option_b', 'option_c', 'option_d'] as $option)
                    <div>
                        <label>
                            <input type="radio" name="answers[{{ $question->id }}]" value="{{ $option }}">
                            {{ $question->$option }}
                        </label>
                    </div>
                @endforeach
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Submit Quiz</button>
    </form>
</div>
@endsection
