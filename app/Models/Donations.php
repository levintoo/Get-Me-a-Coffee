<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Donations extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $appends = ['readbleDonatedAt','readbleDonated'];
    
    public function getReadbleDonatedAtAttribute()
    {
        return Carbon::parse($this->donated_at)->format('F j, Y');
    }
    public function getReadbleDonatedAttribute()
    {
        $interval = Carbon::parse($this->donated_at)->diffForHumans();
        return $interval;
    }
}
