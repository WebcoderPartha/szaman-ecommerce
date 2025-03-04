<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Brand extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product(){
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }


}
