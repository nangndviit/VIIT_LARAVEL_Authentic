<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands'; // Tên của bảng

    protected $primaryKey = 'ID_Brand';
    protected $fillable = ['Name_Brand', 'Anh_Brand'];

    public function products()
    {
        return $this->hasMany(Product::class, 'ID_Brand');
    }
}
