<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quizQuestion extends Model
{
    use HasFactory;
    protected $fillable = ['question'];

    public function option()
    {
        return $this->hasMany(quizOption::class);
    }
}
