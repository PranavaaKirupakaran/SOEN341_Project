<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // This specifies which table should be using when calling the methods included in the class.
    // It should be set to the same name used in the database/migrations - follow the Schema.
    // E.g. in this case Schema::create('products', function (Blueprint $table)
    protected $table = "products";

    protected static function newFactory()
    {
        return ProductFactory::new();
    }
}
