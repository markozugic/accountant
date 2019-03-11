<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExpenseType\CreateExpenseTypeRequest;
use App\Http\Requests\ExpenseType\UpdateExpenseTypeRequest;
use App\Models\ExpenseType;
use Illuminate\Http\Request;

class ExpenseTypeController extends Controller
{
    private $expenseTypeService;

    public function __construct(ExpenseType $expenseTypeService)
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
    public function show(UpdateExpenseTypeRequest $expenseType)
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
    public function update(Request $request, ExpenseType $expenseType)
    {
        $data = $request->validated();
        $updatedExpenseType = $this->expenseTypeService->update($expense, $data);

        return response($updatedExpenseType);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->expenseTypeService->destroy($expense);

        return response("Deleted", 200);
    }
}
