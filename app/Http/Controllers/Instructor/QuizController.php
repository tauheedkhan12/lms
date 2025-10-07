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
}
