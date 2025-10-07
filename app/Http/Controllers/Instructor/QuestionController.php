<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(Quiz $quiz)
    {
        return view('instructor.questions.create', compact('quiz'));
    }

    public function store(Request $request, Quiz $quiz)
    {
        $request->validate([
            'question' => 'required|string',
            'options' => 'required|string', // comma-separated
            'correct_answer' => 'required|string',
        ]);

        $quiz->questions()->create([
            'question' => $request->question,
            'options' => json_encode(array_map('trim', explode(',', $request->options))),
            'correct_answer' => $request->correct_answer,
        ]);

        return redirect()->route('courses.quizzes.create', $quiz->course_id)->with('success', 'Question added successfully');
    }
}
