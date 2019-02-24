<?php

namespace App\Models;

use App\Models\Bill;
use App\Models\Saving;
use App\Models\Expense;
use App\Models\User\User;
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
        $this->hasMany(Bill::class);
    }

    /**
     * Specifies House relation to Expense
     *
     * @return void
     */
    public function expenses() 
    {
        $this->hasMany(Expense::class);
    }

    /**
     * Specifies House relation to Saving
     *
     * @return void
     */
    public function savings() 
    {
        $this->hasMany(Saving::class);
    }

    /**
     * Specifies House relation to User
     *
     * @return void
     */
    public function userProfiles() 
    {
        $this->hasMany(User::class);
    }
}