<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function createCart(array $data)
    {
        self::create($data);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
