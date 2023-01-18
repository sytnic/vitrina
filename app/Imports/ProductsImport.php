<?php

namespace App\Imports;

use App\Models\Product;
//use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

//class ProductsImport implements ToModel
class ProductsImport implements ToCollection
{
    /** I not use this
    * 
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            //
        ]);
    }

    public function collection(Collection $rows)
    {
        // Выкинуть первую строку из Collection
        // https://laravel.com/docs/8.x/collections#method-shift
        $rows->shift();

        foreach ($rows as $row) 
        {
            //var_dump($rows);
            //dd($rows, $row[0]);

            Product::create([
                'name'      => $row[0],
                'firma'     => $row[1], 
                'code'      => $row[2],
                'kolvo'     => $row[3], 
                'tsena'     => $row[4],
                'opisanie'  => $row[5], 
                'photo'     => $row[6],
                'group'     => $row[7], 
                'prodano'   => $row[8],
                'vputi'     => $row[9], 
                'zakup'     => $row[10],
                'akt_tsen'  => $row[11], 
                'analogi'   => $row[12],
                'identifikator'=> $row[13],
                'datetime'  => $row[14],
                'tochka'    => $row[15],
                'info_tochki' => $row[16],
                'geo_tochki' => $row[17],
                'phone'     => $row[18],
            ]);
        }
    }
}
