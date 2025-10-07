<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function create(Course $course)
    {
        return view('instructor.modules.create', compact('course'));
    }

    public function store(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $course->modules()->create([
            'title' => $request->title
        ]);

        return redirect()->route('courses.show', $course->id)->with('success', 'Module added successfully');
    }
}
