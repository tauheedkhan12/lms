<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasRoles, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Instructors → Courses
    public function courses()
    {
        return $this->hasMany(Course::class, 'instructor_id');
    }

    // Students → Enrollments
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'student_id');
    }
}
