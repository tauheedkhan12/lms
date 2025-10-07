<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Module;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function create(Module $module)
    {
        return view('instructor.lessons.create', compact('module'));
    }

    public function store(Request $request, Module $module)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'video_url' => 'nullable|url',
        ]);

        $module->lessons()->create([
            'title' => $request->title,
            'content' => $request->content,
            'video_url' => $request->video_url,
        ]);

        return redirect()->route('courses.show', $module->course_id)->with('success', 'Lesson added successfully');
    }
}
