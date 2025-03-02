<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\sections;
use App\Models\products;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $sections = [
            ['id' => 1, 'name' => 'mobile phones', 'description' => '', 'image_path' => 'assets/img/m.jpg'],
            ['id' => 2, 'name' => 'laptops', 'description' => '', 'image_path' => 'assets/img/l.jpg'],
            ['id' => 3, 'name' => 'Tvs', 'description' => '', 'image_path' => 'assets/img/mac.jpg'],
            ['id' => 4, 'name' => 'playstations', 'description' => '', 'image_path' => 'assets/img/p.jpg'],
        ];
        sections::insertOrIgnore($sections);

        $names = ['samsung s24 ultra', 'iphone16', 'xiaomi mi9'];
        $image = ['assets/img/sam.jpg', 'assets/img/p.jpg', 'assets/img/x.jpg'];
        for ($i = 0; $i < 3; $i++) {
            products::insertOrIgnore([
                'id' => $i + 1,
                'name' => $names[$i],
                'description' => 'product no.' . $i + 1,
                'image_path' => $image[$i],
                'section_id' => 1,
                'price' => rand(10000, 50000),
                'stock' => rand(1, 20),
            ]);
        }
    }
}
