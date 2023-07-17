<?php

namespace Database\Seeders;

use App\Models\Postcategory;
use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $postcategories = [
            ['post_id' => '8', 'category_id' => '7'],
            ['post_id' => '8', 'category_id' => '13'],
            ['post_id' => '9', 'category_id' => '7'],
            ['post_id' => '9', 'category_id' => '8'],
            ['post_id' => '9', 'category_id' => '12'],
            ['post_id' => '9', 'category_id' => '13'],
            ['post_id' => '10', 'category_id' => '6'],
            ['post_id' => '10', 'category_id' => '13'],
            ['post_id' => '10', 'category_id' => '14'],
        ];

        Postcategory::insert($postcategories);
    }
}
