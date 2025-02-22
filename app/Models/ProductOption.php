<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    use HasFactory;
    protected $table = 'products_options';
    protected $guarded = [''];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
