<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class userInfo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        
        'email',
        'location',
        'phonenumber',
        'photo',
        'bio',
        'facebook',
        'instagrame',
        'twitter',
        'tiktok',
        'linkedIn',
        'telegrame',
        'Buissnes_type',
        'emailLogedIn',
        'appleWallet',
        'whatsapp'
    ];

    
}






