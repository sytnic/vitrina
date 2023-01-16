<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Попытка в любом случае пропустить первую строку в Excel, 
        // пустая ли она, либо задана

        // В этих попытках пропускается любая строка, которая
        // пустая или с текстом "Наименование"

        // If the first cell is empty, method will skip such a row        
        if (!isset($row[0])) {
            return null;
        }

        if ($row[0] == "Наименование") {
            return null;
        }

        // dd($row);

        return new User([
           'name'     => $row[0],
           'email'    => $row[1], 
           'password' => Hash::make($row[2]),
        ]);
    }

    


}
