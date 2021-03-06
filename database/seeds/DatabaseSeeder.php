<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleTableSeeder::class,
            UserTableSeeder::class,
            PageTableSeeder::class,
            SettingsTableSeeder::class,
            NewsTableSeeder::class,
            FaqTableSeeder::class,
        ]);
    }
}
