<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function create(Course $course)
    {
        return view('instructor.quizzes.create', compact('course'));
    }

    public function store(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $course->quizzes()->create([
            'title' => $request->title
        ]);

        return redirect()->route('courses.show', $course->id)->with('success', 'Quiz created successfully');
    }
    public function take($courseId, $quizId)
{
    $quiz = Quiz::with('questions')->findOrFail($quizId);
    return view('student.quizzes.take', compact('quiz'));
}

public function submit(Request $request, $courseId, $quizId)
{
    $quiz = Quiz::with('questions')->findOrFail($quizId);

    $score = 0;
    foreach ($quiz->questions as $question) {
        $userAnswer = $request->input('answers.' . $question->id);
        if ($userAnswer && $userAnswer == $question->correct_option) {
            $score++;
        }
    }

    // Optionally store result in DB
    // QuizResult::create([...]);

    return redirect()->route('student.my-courses')
                     ->with('success', 'Quiz submitted! You scored ' . $score . '/' . $quiz->questions->count());
}

}
