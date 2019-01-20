<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'payment'
    ];

    /**
     * Specifies Saving relation to House
     *
     * @return void
     */
    public function house() 
    {
        $this->hasOne(App\House::class);
    }

}