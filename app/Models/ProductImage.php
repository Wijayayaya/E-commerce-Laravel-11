<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'img_path',
        'is_primary',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    public function getPrimaryImageAttribute()
    {
    return $this->images()->where('is_primary', true)->first();
    }

}
