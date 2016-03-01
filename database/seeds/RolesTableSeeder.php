<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles =[[
            'name' => 'admin',
            'display_name' => 'Administrator',
            'description' => 'Administrator',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'editor',
            'display_name' => 'Editor',
            'description' => 'Editor',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'author',
            'display_name' => 'Author',
            'description' => 'Author',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ]];

        DB::table('roles')->insert($roles);
    }
}
