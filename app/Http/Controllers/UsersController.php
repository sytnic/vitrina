<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
// use App\Models\User;

class UsersController extends Controller 
{
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function importUsers(Request $request) 
    {
        // It works.
        // Excelfile in default must be in /public
        // must not have a hat,
        // must have three columns, password is without hash
        // according to Imports/UsersImport
        //Excel::import(new UsersImport, 'users.xlsx');
  
        // It works. Including xlsx, xls, different names.
        // Html-form must have field 'name="file"'
        if (!empty($request->file)) {
            Excel::import(new UsersImport, request()->file('file'));
            return redirect('/usersimport')->with('success', 'Файл загружен!');
        } else {
            return back()->with(['msg' => 'Файл не выбран.']);
        }
        
    }
}

