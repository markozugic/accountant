<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['name', 'payment'];
    
    public function user() {
        $this->hasOne(App\User::class);
    }
}
