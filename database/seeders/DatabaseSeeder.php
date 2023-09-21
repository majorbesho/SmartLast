<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

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
        $this->call(UserTableSeeder::class);
        $this->call(CountrySeeder::class);
        //$this->call(CountrySeeder::class);

        //\App\Models\User::factory(20)->create();
        \App\Models\Category::factory(20)->create();
        \App\Models\Brand::factory(20)->create();
        \App\Models\art::factory(20)->create();
        \App\Models\focus::factory(20)->create();
        \App\Models\client::factory(20)->create();
        //\App\Models\setting::factory(2)->create();
        \App\Models\supplier::factory(20)->create();
        \App\Models\product::factory(50)->create();
        \App\Models\team::factory(10)->create();
        \App\Models\Branch::factory(10)->create();
        \App\Models\testim::factory(10)->create();
        \App\Models\Banner::factory(10)->create();
        \App\Models\groupProduct::factory(10)->create();
        \App\Models\winner::factory(10)->create();
        \App\Models\about::factory(10)->create();
        \App\Models\media::factory(10)->create();







    }
}
