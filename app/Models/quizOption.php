<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quizOption extends Model
{
    use HasFactory;
    protected $fillable = ['option','quistion_id','is_correct'];
}
