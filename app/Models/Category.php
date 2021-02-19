<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'up_id');
    }

    public function upCategory()
    {
        return $this->belongsTo(Category::class, 'up_id')
            ->withDefault(['title' => 'Uncategorized']);
    }


}
