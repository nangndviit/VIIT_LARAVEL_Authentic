<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sizegiay extends Model
{
    protected $table = 'sizegiay';

    protected $primaryKey = 'id'; // Khóa chính của bảng Sizegiay

    protected $fillable = ['size_name', 'size_ton'];

    // Định nghĩa mối quan hệ nhiều-nhiều với bảng Product
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_size', 'size_id', 'ID_SP');
    }
}
