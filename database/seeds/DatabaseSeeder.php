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
        $this->call([
            UserTableSeeder::class,
            Role_userSeeder::class,
            // ArticleTableSeeder::class,
            // CategoryTableSeeder::class,
            // CustomerTableSeeder::class,
        ]);
    }
}

class Role_userSeeder extends Seeder{
    public function run()
    {
        DB::table('role_users')->insert([
            array(
                'role_id' => 1,
                'role_name' => 'super-admin',
                'role_des' => 'Super Administrator',
                'role_status' => 1,
            ),
            array(
                'role_id' => 2,
                'role_name' => 'admin',
                'role_des' => 'Administrator',
                'role_status' => 1,
            ),
            array(
                'role_id' => 3,
                'role_name' => 'moderator',
                'role_des' => 'Moderator',
                'role_status' => 1,
            ),
            array(
                'role_id' => 11,
                'role_name' => 'normal',
                'role_des' => 'Normal',
                'role_status' => 1,
            ),
        ]);
    }
}
