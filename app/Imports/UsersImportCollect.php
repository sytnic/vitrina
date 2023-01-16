<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class UsersImportCollect implements ToCollection
{
    public function collection(Collection $rows)
    {
        // Попытка выкинуть первую строку Excel
        
        // It works
        //unset($rows[0]);

        // это объект Коллекции, а не просто массив
        // This not work
        //$first = array_shift($rows[0]);

        // поэтому
        // https://laravel.com/docs/8.x/collections#method-shift
        // It works
        $rows->shift();       

        foreach ($rows as $row) 
        {
            //var_dump($rows);
            //dd($rows, $row[0]);

            User::create([
                'name' => $row[0],
                'email'=> $row[1], 
                'password' => Hash::make($row[2]),
            ]);
        }
    }
}