<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'userid',
        'name',
        'username',
        'phone',
        'national_id',
        'category',
        'about',
        'utype',
        'email',
        'password',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
        'readableStatus',
        'imgname',
    ];
    public function getReadableStatusAttribute()
    {
        if($this->status == '0' ){
            $readableStatus = "created";
        }elseif($this->status == '1' ){
            $readableStatus = "activated";
        }elseif($this->status == '2' ){
            $readableStatus = "deleted";
        }elseif($this->status == '3' ){
            $readableStatus = "suspended";
        }else {
            $readableStatus = "else";
        }
        return $readableStatus;
    }
    public function getImgnameAttribute()
    {
        if(is_null($this->photo) || $this->photo === ""){
            $this->photo = 'rand.jpg';
        }else{
            $file = public_path('assets/images/users/'.$this->photo);
            if( file_exists($file)){
                $this->photo = $this->photo;
            }else{
                $this->photo = 'rand.jpg';
            }
        }
        return $this->photo;
    }
}
