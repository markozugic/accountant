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
        return Saving::create($data);
    }

    public function update(Saving $saving, array $data)
    {
        return $saving->update($data);
    }

    public function destroy($saving)
    {
        return $saving->delete();
    }

}