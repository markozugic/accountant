<?php

namespace App\Http\Controllers\Api;

use App\Models\Bill;
use Illuminate\Http\Request;
use App\Services\BillService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Bill\{
    CreateBillRequest,
    UpdateBillRequest
};

class BillController extends Controller
{
    private $billService;

    public function __construct(BillService $billService)
    {
        $this->billService = $billService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bills = $this->billService->all();

        return response($bills);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBillRequest $request)
    {
        $data = $request->all();
        $bill = $this->billService->store($data);

        return response($bill);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
        return response($bill);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBillRequest $request, Bill $bill)
    {
        $data = $request->all();
        $bill = $this->billService->update($bill, $data);

        return response($bill);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $bill)
    {
        $this->billService->destroy($bill);

        return response("Deleted", 200);
    }
}
