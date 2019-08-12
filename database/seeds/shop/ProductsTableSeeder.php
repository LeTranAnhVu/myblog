<?php

use App\Models\Api\Shop\Discount;
use App\Models\Api\Shop\Brand;
use App\Models\Api\Shop\Product;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 50;
        $faker = Faker::create();
        $state = [ '0', '1', '2' ,'3'];
        for ($i = 0; $i < $limit; $i++) {
            $image_urls = [];
            for ($j = 0; $j < 5; $j++) {
                array_push($image_urls, $faker->imageUrl($width = 250, $height = 250));
            }

            $brand_id = $faker->numberBetween(1, Brand::all()->count());
            $discount_id = null;
            if ($faker->boolean(10)) {
                $discount_id = $faker->numberBetween(1, Discount::all()->count());
            }
            Product::create([
                'name' => $faker->name(),
                'image_urls' => implode(',', $image_urls),
                'quantity_sold' => $faker->numberBetween(0, 100),
                'quantity_in_stock' => $faker->numberBetween(1, 100),
                'description' => $faker->paragraph(20),
                'sku' => $faker->countryCode().'-'.(string)$faker->numberBetween(10, 30),
                'brand_id' => $brand_id,
                'discount_id' => $discount_id,
                'state' =>  $state[array_rand($state)],
                'price' =>  $faker->randomFloat(2, 1, 100),
                'availabled_at' => null
            ]);
        }
    }
}
