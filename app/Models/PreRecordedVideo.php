<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreRecordedVideo extends Model {
    use HasFactory;
    protected $fillable = [
        'user_id',
        'module_id',
        'module_number',
        'paid_course_id',
        'file',
        'video_number',
        'video_title',
    ];
}
