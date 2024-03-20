<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'ID_SP';

    public $timestamps = false;

    protected $fillable = [
        'ID_Category',
        'ID_Brand',
        'Ten_SP',
        'slug',
        'Gia_SP',
        'Gia_SP2',
        'Mo_Ta',
        'Anh_SP1',
        'Anh_SP2',
    ];

    public function sizes()
    {
        return $this->belongsToMany(Sizegiay::class, 'product_size', 'ID_SP', 'size_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'ID_Category', 'ID_Category');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'ID_Brand');
    }

    // Phương thức accessor cho trường slug
    public function getSlugAttribute($value)
    {
        return Str::slug($value);
    }
}