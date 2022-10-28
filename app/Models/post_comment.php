<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_comment extends Model
{
    use HasFactory;
    protected $fillable = ['comment_text','user_id','post_id','parent_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
