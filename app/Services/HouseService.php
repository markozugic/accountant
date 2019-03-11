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
     * @param  int House id
     * @return Illuminate\Support\Collection
     */
    public function getHouseBills($houseId)
    {
        return House::where('id', $houseId)->with('bills')->get();
    }

    /**
     * Eager load Expenses with House
     *
     * @param  int House id
     * @return Illuminate\Support\Collection
     */
    public function getHouseExpenses($houseId)
    {
        return House::where('id', $houseId)->with('expenseTypes.expenses')->get();
    }
}
