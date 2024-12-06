<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'description' , 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
