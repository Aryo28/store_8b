<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image', 'icon',];
    
    //Many to many
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    //One to Many 
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }

}