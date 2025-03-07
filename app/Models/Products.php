<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $fillable = [
        "product_name",
        "description",
        "product_image",
        "price_per_hour",
        "category_id"
   ];
}
