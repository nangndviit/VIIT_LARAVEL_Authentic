<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories'; // Tên của bảng

    protected $primaryKey = 'ID_Category';

    protected $fillable = ['Name_Catogory', 'title', 'description']; // Các cột có thể gán giá trị

    // Các sản phẩm thuộc danh mục này

    public $timestamps = false;
    public function products()
    {
        return $this->hasMany(Product::class, 'ID_Category');
    }
}
