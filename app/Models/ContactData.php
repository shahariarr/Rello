<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactData extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'about',
        'phone',
        'email',
        'address',
        'linkedin',
        'facebook',
        'map',
        'twitter',
        'instagram',
        'youtube'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
