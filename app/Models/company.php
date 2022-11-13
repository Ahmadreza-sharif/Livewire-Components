<?php

namespace App\Models;

use App\Models\city;
use App\Models\state;
use App\Models\country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class company extends Model
{
    use HasFactory;
    protected $fillable = ['title','country_id','city_id','state_id'];

    public function city()
    {
        return $this->belongsTo(city::class,'city_id');
    }
    public function country()
    {
        return $this->belongsTo(country::class,'country_id');
    }
    public function state()
    {
        return $this->belongsTo(state::class,'state_id');
    }
}
