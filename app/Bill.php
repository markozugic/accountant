<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['name', 'payment', 'user_id'];
    
    public function user() {
        $this->hasOne(App\User::class);
    }
}
