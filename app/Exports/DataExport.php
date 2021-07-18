<?php

namespace App\Exports;


use App\Models\dateOne;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dateOne::all();
    }
}
