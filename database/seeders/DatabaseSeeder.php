<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\Category::factory(10)->create();
//         \App\Models\Product::factory(10)->create();

        User::create([
            "name" => "Iamleblib",
            "email" => "calebbjoseph@gmail.com",
            "password" => Hash::make('passpass')
        ]);

         Category::create([
            'name' => 'Category One',
             'desc' => 'This is a demo content',
             'photo' => 'photoGoesHere'
         ]);

        Category::create([
            'name' => 'Category Two',
            'desc' => 'This is a demo content',
            'photo' => 'photoGoesHere'
        ]);

        Product::create([
            "category_id" => 1,
            "status" => 1,
            "name" => "Item One",
            "desc" => "This is a demo content of this product",
            "price" => 25.99,
        ]);

        Image::create([
            "product_id" => 1,
            "image" => "image goes here",
        ]);

        Product::create([
            "category_id" => 2,
            "status" => 0,
            "name" => "Item Two",
            "desc" => "This is a demo content of this product",
            "price" => 99.99,
        ]);

        Image::create([
            "product_id" => 2,
            "image" => "image goes here",
        ]);

        Product::create([
            "category_id" => 2,
            "status" => 1,
            "name" => "Item Three",
            "desc" => "This is a demo content of this product",
            "price" => 10.99,
        ]);

        Image::create([
            "product_id" => 3,
            "image" => "image goes here",
        ]);

        Product::create([
            "category_id" => 1,
            "status" => 1,
            "name" => "Item Four",
            "desc" => "This is a demo content of this product",
            "price" => 12.99,
        ]);

        Image::create([
            "product_id" => 4,
            "image" => "image goes here",
        ]);



    }
}
