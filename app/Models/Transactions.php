<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactions extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $appends = ['readbleTransactedAt','readbleTransactedAgo','image'];

    public function getReadbleTransactedAtAttribute()
    {
        return Carbon::parse($this->created_at)->format('F j, Y');
    }
    public function getreadbleTransactedAgoAttribute()
    {
        $interval = Carbon::parse($this->created_at)->diffForHumans();
        return $interval;
    }
    public function getimageAttribute()
    {
        if($this->paymentMethod == 'paypal' ){
            $image = "paypal.png";
        }elseif($this->paymentMethod == 'mpesa' ){
            $image = "mpesa.png";
        }
        return $image;
    }
}
