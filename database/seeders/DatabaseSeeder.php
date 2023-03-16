<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use ModalidadSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ModalidadSeeder::class);
        $this->call(CreateAdminUserSeeder::class);


        // \App\Models\User::factory(10)->create();
    }
}
