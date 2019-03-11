<?php

namespace App\Models;

use App\Models\ExpenseType;
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
     * Specifies House relation to Expense
     *
     * @return void
     */
    public function expenseTypes()
    {
        return $this->hasMany(ExpenseType::class);
    }
}
