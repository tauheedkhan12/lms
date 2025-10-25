<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Instructor Controllers
use App\Http\Controllers\Instructor\CourseController;
use App\Http\Controllers\Instructor\ModuleController;
use App\Http\Controllers\Instructor\LessonController;
use App\Http\Controllers\Instructor\QuizController;
use App\Http\Controllers\Instructor\QuestionController;

// Admin Controllers
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;

// Student Controllers
use App\Http\Controllers\Student\EnrollmentController;
use App\Http\Controllers\Student\StudentCourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route::get('/', function () {
//     return view('dashboard');
// });
// Root route - redirect to dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ================== ADMIN ROUTES ==================
    Route::middleware('role:admin')->prefix('admin')->group(function () {
        Route::resource('users', AdminUserController::class);
        Route::resource('courses', AdminCourseController::class);
    });

    // ================== INSTRUCTOR ROUTES ==================
    Route::middleware('role:instructor')->prefix('instructor')->group(function () {
        Route::resource('courses', CourseController::class);
        Route::resource('courses.modules', ModuleController::class);

        // Lessons
        Route::get('/modules/{module}/lessons/create', [LessonController::class, 'create'])->name('modules.lessons.create');
        Route::post('/modules/{module}/lessons', [LessonController::class, 'store'])->name('modules.lessons.store');

        // Quizzes
        Route::get('/courses/{course}/quizzes/create', [QuizController::class, 'create'])->name('courses.quizzes.create');
        Route::post('/courses/{course}/quizzes', [QuizController::class, 'store'])->name('courses.quizzes.store');

        // Questions
        Route::get('/quizzes/{quiz}/questions/create', [QuestionController::class, 'create'])->name('quizzes.questions.create');
        Route::post('/quizzes/{quiz}/questions', [QuestionController::class, 'store'])->name('quizzes.questions.store');
    });

    // ================== STUDENT ROUTES ==================
    // Route::middleware('role:student')->prefix('student')->group(function () {
    //     Route::get('/my-courses', [StudentCourseController::class, 'index'])->name('student.my-courses');
    //     Route::post('/enroll/{course}', [EnrollmentController::class, 'enroll'])->name('student.enroll');
    //     Route::get('/courses', [EnrollmentController::class, 'myCourses'])->name('student.courses');
    // });
    // ================== STUDENT ROUTES ==================
Route::middleware('role:student')->prefix('student')->group(function () {
    Route::get('/my-courses', [StudentCourseController::class, 'index'])->name('student.my-courses');
    Route::post('/enroll/{course}', [EnrollmentController::class, 'enroll'])->name('student.enroll');
    Route::get('/courses', [EnrollmentController::class, 'myCourses'])->name('student.courses');

    // 🆕 View a specific lesson
    Route::get('/courses/{course}/lessons/{lesson}', [LessonController::class, 'show'])
        ->name('student.lessons.show');
});
// 🆕 Take quiz & submit
Route::get('/courses/{course}/quizzes/{quiz}', [QuizController::class, 'take'])
    ->name('student.quizzes.take');
Route::post('/courses/{course}/quizzes/{quiz}/submit', [QuizController::class, 'submit'])
    ->name('student.quizzes.submit');


});


require __DIR__.'/auth.php';
