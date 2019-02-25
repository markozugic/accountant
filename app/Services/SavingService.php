<?php

namespace App\Services;

use App\Models\Saving;

class SavingService 
{

    public function all()
    {
        return Saving::all();
    }

    public function store($data)
    {
        return Saving::create([

        ]);
    }

    public function update(Saving $saving, array $data)
    {
        return $saving->update([

        ]);
    }

    public function destroy($saving)
    {
        return $saving->delete();
    }

}