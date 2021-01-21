<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Post;


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
        User::create([
            'name' => 'Norberto Ruiz',
            'email' => 'i@admin.com',
            'password' => bcrypt('123456')
        ]);
        //factory(App\Models\Post::class,24)->create();;
        Post::factory()->count(24)->create();

    }
}
