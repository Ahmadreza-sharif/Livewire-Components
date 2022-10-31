<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_comment extends Model
{
    use HasFactory;
    protected $fillable = ['comment_text','user_id','post_id','parent_id'];

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function replies()
    {
        return $this->hasMany(post_comment::class,'parent_id')->latest();
    }
}
