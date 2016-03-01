<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [[ 'name' => 'admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('1234'),
                    'created_at'        => Carbon::now(),
                    'updated_at'        => Carbon::now(),
                ],
                [
                    'name' => 'editor',
                    'email' => 'editor@editor.com',
                    'password' => bcrypt('1234'),
                    'created_at'        => Carbon::now(),
                    'updated_at'        => Carbon::now(),
                ],
                [
                    'name' => 'author',
                    'email' => 'author@author.com',
                    'password' => bcrypt('1234'),
                    'created_at'        => Carbon::now(),
                    'updated_at'        => Carbon::now(),
                ]];

        DB::table('users')->insert($users);
    }
}
