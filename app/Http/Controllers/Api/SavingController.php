<?php

namespace App\Http\Controllers\Api;

use App\Models\Saving;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SavingController extends Controller
{
    private $savingService;

    public function __construct(SavingService $savingService)
    {
        $this->savingService = $savingService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $savings = $this->savingService->all();

        return response($savings);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validated();
        $saving = $this->savingService->store($data);

        return response($saving);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function show(Saving $saving)
    {
        return response($saving);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saving $saving)
    {
        $data = $request->validated();
        $saving = $this->savingService->update($saving, $data);

        return response($saving);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Saving  $saving
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saving $saving)
    {
        $this->savingService->destroy($saving);

        return response("Deleted", 200);
    }
}
