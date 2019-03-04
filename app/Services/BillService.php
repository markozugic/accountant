<?php

namespace App\Services;

use App\Models\Bill;

class BillService
{
    /**
     * @return Bill colection
     */
    public function all()
    {
        return Bill::all();
    }

    /**
     * @param  array $data
     * @return Bill
     */
    public function store(array $data)
    {
        return Bill::create($data);
    }

    /**
     * @param  Bill $bill
     * @param  array $data
     * @return Bill
     */
    public function update(Bill $bill, array $data)
    {
        $bill->update($data);

        return $bill;
    }

    public function destroy($bill)
    {
        return $bill->delete();
    }
}
