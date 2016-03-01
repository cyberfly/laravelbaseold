<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [[
            'name' => 'manage_blogs',
            'display_name' => 'manage blogs',
            'description' => 'manage blogs',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'manage_posts',
            'display_name' => 'manage posts',
            'description' => 'manage posts',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'manage_comments',
            'display_name' => 'manage comments',
            'description' => 'manage comments',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'manage_users',
            'display_name' => 'manage users',
            'description' => 'manage users',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'manage_roles',
            'display_name' => 'manage roles',
            'description' => 'manage roles',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ]] ;

        DB::table('permissions')->insert($permissions);
    }
}
