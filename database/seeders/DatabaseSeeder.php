<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('recipes')->insert([
            'recipe_name' => '糖醋排骨',
            'kind_id' => 1,
        ]);
        DB::table('kinds')->insert([
            'kind_name' => '凉拌小菜',
        ]);
        DB::table('kinds')->insert([
            'kind_name' => '中式小吃',
        ]);
    }
}
