<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'nama', 'harga_jual', 'stok', 'category_id',];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}