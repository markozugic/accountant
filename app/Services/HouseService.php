<?php

namespace App\Services;

use App\Models\House;

class HouseService 
{

    public function all()
    {
        return House::all();
    }

    public function store($data)
    {
        return House::create([

        ]);
    }

    public function update(House $house, array $data)
    {
        return $house->update([

        ]);
    }

    public function destroy($house)
    {
        return $house->delete();
    }

}