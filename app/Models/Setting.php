<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'discounted_product_id',
        'discounted_percent',
        'discounted_heading',
        'discounted_subheading',
        'featured_product_1_id',
        'featured_product_2_id',
    ];

    public function discountedProduct()
    {
        return $this->belongsTo(Product::class);
    }

    public function featuredProduct1()
    {
        return $this->belongsTo(Product::class);
    }

    public function featuredProduct2()
    {
        return $this->belongsTo(Product::class);
    }
}
