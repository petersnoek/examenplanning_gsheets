<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // disable foreign key constraints

        DB::table('users')->truncate();
        DB::table('users')->insert(['id' => '1','name' => 'psnoek','email' => 'psnoek@davinci.nl','password' => '$2y$10$.Va41gf9nGZKp3I0m/pT4eIr/MQTcnRBD1fARm6SZrrdVwhC7JwOi','remember_token' => NULL,'created_at' => '2017-06-01 08:18:18','updated_at' => '2017-06-01 08:18:18']);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // re-enable foreign key constraints

    }
}
