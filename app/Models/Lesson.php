<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $primaryKey = 'lesson_id';
    protected $fillable = ['title','module_id','video_path','notes'];

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id');
    }
}

