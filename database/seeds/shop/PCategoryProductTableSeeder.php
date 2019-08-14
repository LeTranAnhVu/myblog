<?php

use Illuminate\Database\Seeder;
use \App\Models\Api\Shop\Product;
use Faker\Factory as Faker;
use App\Models\Api\Shop\PCategory;

class PCategoryProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        $products->each(function ($product) {
            $faker = Faker::create();
            // categories length
            $numberOfCategory = PCategory::all()->count();
            $repeater = $faker->numberBetween(1, $numberOfCategory);
            $l = [];
            for ($i = 0; $i < $repeater; $i++) {
                $rdCategoriesId = $faker->numberBetween(1, $numberOfCategory);
                $l[$rdCategoriesId] = $product->id;
            }
            foreach ($l as $rdCategoriesId => $productId)
                DB::table('category_product')->insert([
                    'category_id' => $rdCategoriesId,
                    'product_id' => $productId
                ]);

        });
    }
}
