<?php

use App\Models\Api\Shop\Discount;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DiscountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'mua hoa yeu thuong',
            '8/3 lang man',
            'than gui ba me',
            'cam on thay co',
        ];
        foreach ($names as $name) {
            $faker = Faker::create();
            $started_at = $faker->dateTimeBetween('now','this year');
            $rd_day = '+'.(string)$faker->numberBetween(2, 60).' days';
            $ended_at = $faker->dateTimeBetween( 'now' ,  strtotime($rd_day));
            Discount::create([
                'name' => $name,
                'discount_percent' => $faker->numberBetween(1,60)/100,
                'is_available' => $faker->boolean(),
                'started_at' => $started_at,
                'ended_at' => $ended_at,
            ]);
        }
    }
}
