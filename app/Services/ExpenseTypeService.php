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
        return $expenseType->update($data);
    }

    public function destroy($expenseType)
    {
        return $expenseType->delete();
    }
}
