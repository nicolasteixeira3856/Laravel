<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];
    
}

//Tabela singular _ tabela singular - ordem alfabética
//category_product

$category = new Category();

$query = $category->where();
$query->where();
$results = $query->get();
