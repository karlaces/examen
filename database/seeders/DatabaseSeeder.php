<?php

namespace Database\Seeders;

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
        $users = \App\Models\User::factory(100)->create();
        $users->each(function ($u) {
            $u->userdomicilio()->save(\App\Models\UserDomicilio::factory()->make());
        });
    }
}
