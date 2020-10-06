<?php

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
        // $this->call(UserSeeder::class);
        $this->call(m_CollectionsTableSeeder::class);
        $this->call(m_ToursTableSeeder::class);
        $this->call(m_CheckpointsTableSeeder::class);
        
        
        
    }
}
