<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function getAll()
    {
        return self::inRandomOrder()->get();
    }

    public static function newProduct()
    {
        return self::latest()->take(3)->get();
    }

    public static function getRand()
    {
        return self::inRandomOrder()->get();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function image(): HasMany
    {
        return $this->hasMany(Image::class);
    }

}
