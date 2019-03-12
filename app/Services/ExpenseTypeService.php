<?php

namespace App\Services;

use App\Models\ExpenseType;

class ExpenseTypeService
{
    public function all()
    {
        return ExpenseType::all();
    }

    public function store($data)
    {
        return ExpenseType::create($data);
    }

    public function update(ExpenseType $expenseType, array $data)
    {
        $expenseType->update($data);

        return $expenseType;
    }

    public function destroy($expenseType)
    {
        return $expenseType->delete();
    }
}
