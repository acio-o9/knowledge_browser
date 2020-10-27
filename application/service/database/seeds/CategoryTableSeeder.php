<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'PHP',
            'created_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Java',
            'created_at' => new DateTime(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Swift',
            'created_at' => new DateTime(),
        ]);
    }
}
