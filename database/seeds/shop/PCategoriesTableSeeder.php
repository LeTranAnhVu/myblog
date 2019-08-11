<?php

use App\Models\Api\Shop\PCategory;
use Illuminate\Database\Seeder;

class PCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cats = [
            'other',
            'hot',
            'old stuff',
            'brand new',
            'like new',
        ];
        foreach ($cats as $cat) {
            $slug = DatabaseSeeder::slugify($cat);
            PCategory::create([
                'name' => $slug,
                'display_name' => $cat
            ]);
        }
    }
}
