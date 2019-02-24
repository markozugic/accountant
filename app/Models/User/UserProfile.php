<?php

namespace App\Models\User;

use App\Models\House;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'full_name', 'description', 'date_of_birth', 'user_id', 'house_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function house()
    {
        return $this->belongsTo(House::class);
    }
}
