<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function createCategory(array $data)
    {
        self::create($data);
    }

    public static function getAll()
    {
        return self::all();
    }

    final public function updateCategory(array $data, $id): bool
    {
        return $this->where('id', $id)->update($data);
    }

    final public function remove($id): bool
    {
        return $this->where('id', $id)->delete();
    }

    public static function validate($request)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'desc' => 'required',
        ]);
    }

    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
