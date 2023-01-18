<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // никакую колонку не надо защищать, для записи открыты все колонки!
    // То же самое, что перечислить все столбцы в массиве $fillable
    protected $guarded = [];
}
