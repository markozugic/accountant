<?php

namespace App\Http\Controllers\Api;

use App\Models\ExpenseType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ExpenseTypeService;
use App\Http\Requests\ExpenseType\CreateExpenseTypeRequest;
use App\Http\Requests\ExpenseType\UpdateExpenseTypeRequest;

class ExpenseTypeController extends Controller
{
    private $expenseTypeService;

    public function __construct(ExpenseTypeService $expenseTypeService)
    {
        $this->expenseTypeService = $expenseTypeService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expensesTypes = $this->expenseTypeService->all();

        return response($expensesTypes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateExpenseTypeRequest $request)
    {
        $data = $request->validated();
        $expenseType = $this->expenseTypeService->store($data);

        return response($expenseType);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseType $expenseType)
    {
        return $expenseType;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExpenseTypeRequest $request, ExpenseType $expenseType)
    {
        $data = $request->validated();
        $updatedExpenseType = $this->expenseTypeService->update($expenseType, $data);

        return response($updatedExpenseType);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseType $expenseType)
    {
        $this->expenseTypeService->destroy($expenseType);

        return response("Deleted", 200);
    }
}
