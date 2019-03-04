<?php

namespace App\Services;

use App\Models\House;

class HouseService
{

    /**
     * @return House collection
     */
    public function all()
    {
        return House::all();
    }

    /**
     * @param  array $data
     * @return House
     */
    public function store(array $data)
    {
        return House::create($data);
    }

    /**
     * @param  House $house
     * @param  array $data
     * @return House
     */
    public function update(House $house, array $data)
    {
        $house->update($data);

        return $house;
    }

    public function destroy($house)
    {
        return $house->delete();
    }

    /**
     * Eager load Bills with House
     *
     * @param  House
     * @return $mixed
     */
    public function getHouseBills(House $house)
    {
        return $house->with('bills')->get();
    }
}
