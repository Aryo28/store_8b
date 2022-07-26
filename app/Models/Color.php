<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //many to many inversed
    public function products(){
        return $this->belongsToMany(Product::class);
    }

    //many to many
    public function sizes(){
        return $this->belongsToMany(Size::class);
    }

}
