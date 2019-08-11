<?php

use App\Models\Api\Shop\Brand;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $names = [
            'victoria secret',
            'boutique',
            'fiora',
            'floral',
            'lotus flower',
            'bloom',
            'one rose',
            '4lady'
        ];
        foreach ($names as $name) {
            Brand::create([
                'name' => $name,
                'logo_url' => $faker->imageUrl($width = 80, $height = 80),
            ]);
        }
    }
}
