<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title','start','end'];


    public function getStartAttribute($value)
    {
        return Carbon::parse($value)->format('H:i');
    }

    public function getEndAttribute($value)
    {
        return Carbon::parse($value)->format('H:i');
    }
}
