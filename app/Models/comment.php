<?php

namespace App\Models;

use App\Models\vote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class comment extends Model
{
    use HasFactory;
    public function vote()
    {
        return $this->hasMany(vote::class);
    }
}
