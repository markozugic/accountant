<?php

namespace App\Models;

use App\Models\House;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    /**
     *  The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'type', 'amount', 'payment', 'house_id'];
    
    /**
     * Specifies Bill and House relation
     *
     * @return void
     */
    public function house()
    {
        return $this->hasOne(House::class);
    }
}
