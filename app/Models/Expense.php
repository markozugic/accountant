<?php

namespace App\Models;

use App\Models\ExpenseType;
use App\Models\House;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $guarded = ['id'];

    /**
     * Specifies Expense relation to ExpenseType
     *
     * @return void
     */
    public function type()
    {
        return $this->belongsTo(ExpenseType::class);
    }
}
