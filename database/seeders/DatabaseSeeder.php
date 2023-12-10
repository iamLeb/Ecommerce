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
    }
}
