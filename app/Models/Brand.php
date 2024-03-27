<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Sizegiay;
use App\Models\Product;

class Brand extends Model
{
    protected $table = 'brands';
    protected $primaryKey = 'ID_Brand';
    protected $fillable = ['Name_Brand', 'Anh_Brand'];

    public function products()
    {
        return $this->hasMany(Product::class, 'ID_Brand');
    }

    public function sizes()
    {
        return $this->hasMany(Sizegiay::class, 'ID_Brand');
    }
}