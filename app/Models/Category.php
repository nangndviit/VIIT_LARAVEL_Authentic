<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $table = 'categories'; 

    protected $primaryKey = 'ID_Category';

    protected $fillable = ['Name_Catogory', 'slug', 'title', 'description'];

    public $timestamps = false;


    public function getSlugAttribute($value)
    {
        return Str::slug($value);
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'ID_Category');
    }
}