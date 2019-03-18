<?php

namespace App\Http\Controllers\Api;

use App\Models\House;
use App\Services\HouseService;
use App\Http\Controllers\Controller;
use App\Http\Requests\House\{
    CreateHouseRequest,
    UpdateHouseRequest
};

class HouseController extends Controller
{
    private $houseService;

    public function __construct(HouseService $houseService)
    {
        $this->houseService = $houseService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = $this->houseService->all();

        return response($houses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateHouseRequest $request)
    {
        $data = $request->validated();
        $house = $this->houseService->store($data);

        return response($house);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show(House $house)
    {
        return response($house);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHouseRequest $request, House $house)
    {
        $data = $request->validated();
        $house = $this->houseService->update($house, $data);

        return response($house);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house)
    {
        $this->houseService->destroy($house);

        return response("Deleted", 200);
    }

    /**
     * Display House with ExpenseTypes
     *
     * @param  $id
     * @return $mixed
     */
    public function getHouseExpenseTypes($id)
    {
        $houseWithExpenseTypes = $this->houseService->getHouseExpenseTypes($id);

        return response($houseWithExpenseTypes);
    }

    /**
     * Display House with Expense
     *
     * @param  House
     * @return $mixed
     */
    public function getHouseExpenses($id)
    {
        $houseWithExpenses = $this->houseService->getHouseExpenses($id);

        return response($houseWithExpenses);
    }
}
