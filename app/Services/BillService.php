<?php

namespace App\Services;

use App\Models\Bill;

class BillService 
{

    public function all()
    {
        return Bill::all();
    }

    public function store($data)
    {
        return Bill::create($data);
    }

    public function update(Bill $bill, array $data)
    {
        return $bill->update($data);
    }

    public function destroy($bill)
    {
        return $bill->delete();
    }

}