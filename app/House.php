<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'budget'
    ];

    /**
     * Specifies House relation to Bill
     *
     * @return void
     */
    public function bills() 
    {
        $this->hasMany(App\Bill::class);
    }

    /**
     * Specifies House relation to Expense
     *
     * @return void
     */
    public function expenses() 
    {
        $this->hasMany(App\Expense::class);
    }

    /**
     * Specifies House relation to Saving
     *
     * @return void
     */
    public function savings() 
    {
        $this->hasMany(App\Saving::class);
    }

    /**
     * Specifies House relation to User
     *
     * @return void
     */
    public function users() 
    {
        $this->hasMany(App\User::class);
    }

}
