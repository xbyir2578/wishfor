<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishfor extends Model
{
    protected $fillable = ['content', 'url',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function get_users()
    {
        return $this->belongsToMany(User::class, 'get', 'wishfor_id', 'user_id')->withTimestamps();
    }
}
