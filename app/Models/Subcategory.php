<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'created_at',
        'update_at',
    ];

    //relacion uno a muchos
    public function products(){
        return $this->hasMany(Product::class);
    }

    //relacion de uno a muchos inversa a categories
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
