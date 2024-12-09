<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'user_name',
        'email',
        'phone',
        'address',
        'biography',
        'profile_img',
        'user_id',

    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
