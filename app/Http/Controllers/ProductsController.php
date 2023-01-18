<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    
    public function importProducts(Request $request) 
    {
        // Если файл есть в запросе, то загружаем его из поля input name='file'
        // и редиректимся сюда же get-запросом с сообщением из сессии,
        // иначе, редиректимся сюда же гетом с предупреждением из сессии
        if (!empty($request->file)) {
            Excel::import(new ProductsImport, request()->file('file'));
            return redirect('/products/import')->with('success', 'Файл загружен!');
        } else {
            return back()->with(['msg' => 'Файл не выбран.']);
        }
    }
}
