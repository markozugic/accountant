<?php

namespace App\Services;

use App\Models\Expense;

class ExpenseService
{

    public function all()
    {
        return Expense::all();
    }

    public function store($data)
    {
        return Expense::create($data);
    }

    public function update(Expense $expense, array $data)
    {
        $expense->update($data);

        return $expense;
    }

    public function destroy($expense)
    {
        return $expense->delete();
    }

}
