<?php

namespace App\Models;

use App\Models\Expense;
use App\Models\House;
use Illuminate\Database\Eloquent\Model;

class ExpenseType extends Model
{
    protected $guarded = ['id'];

     /**
     * Specifies Expense relation to House
     *
     * @return void
     */
    public function house()
    {
        return $this->belongsTo(House::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
}
