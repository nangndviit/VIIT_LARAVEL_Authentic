<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'ID_SP'; // Khóa chính

    public $timestamps = false;

    protected $fillable = [
        'ID_Category',
        'ID_Brand',
        'Ten_SP',
        'Gia_SP',
        'Anh_SP1',
        'Anh_SP2',
    ];

    // Định nghĩa các liên kết với các bảng khác
    public function category()
    {
        return $this->belongsTo(Category::class, 'ID_Category');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'ID_Brand');
    }
}
