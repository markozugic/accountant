<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'name', 'amount'
    ];

        /**
     * Specifies Expense relation to House
     *
     * @return void
     */
    public function house() 
    {
        $this->hasOne(App\House::class);
    }
}
