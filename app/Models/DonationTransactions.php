<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DonationTransactions extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $appends = ['readbleTransactedAt','readbleTransactedAgo','randomImg'];

    public function getReadbleTransactedAtAttribute()
    {
        return Carbon::parse($this->created_at)->format('F j, Y');
    }
    public function getreadbleTransactedAgoAttribute()
    {
        $interval = Carbon::parse($this->created_at)->diffForHumans();
        return $interval;
    }
    public function getRandomImgAttribute()
    { $random = rand(1,4);
        if($random == '1' ){
            $randomImg = "boy.png";
        }elseif($random == '2' ){
            $randomImg = "girl.png";
        }elseif($random == '3' ){
            $randomImg = "man.png";
        }elseif($random == '4' ){
            $randomImg = "woman.png";
        }
        return $randomImg;
    }
}
