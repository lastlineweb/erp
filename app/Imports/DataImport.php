<?php

namespace App\Imports;

use App\dateOne;
use Maatwebsite\Excel\Concerns\ToModel;

class DataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new dateOne([
            'productCode'     => $row['name'],
            'productName'    => $row['email'], 
            'description'    => $row['email'], 
            'varient'    => $row['email'], 
            'buyPrice'    => $row['email'], 
            'sellPrice'    => $row['email'], 
            'wholeSellPrice'    => $row['email'], 
            'transferPrice'    => $row['email'], 
            'openingStock'    => $row['email'], 
            'measureUnit'    => $row['email'], 
            'packetName'    => $row['email'], 
            'packetQuantity'    => $row['email'], 
            'barCode'    => $row['email'], 
            'priceCode'    => $row['email'], 
            'categoryName'    => $row['email'], 
            'subCategoryName'    => $row['email'], 
            'companyName'    => $row['email'], 
            'isSerialNo'    => $row['email']),
        ]);
    }
}
