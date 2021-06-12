<?php

namespace App\Exports;

use App\Models\BukuModel;
use Maatwebsite\Excel\Concerns\FromCollection;


class Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        
        return BukuModel::all();
        
    }
}
