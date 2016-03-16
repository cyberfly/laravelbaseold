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
        $permissions = [
        [
            'name' => 'manage_users',
            'display_name' => 'Manage Users',
            'description' => 'Manage Users',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'create_user',
            'display_name' => 'Create User',
            'description' => 'Create User',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'edit_user',
            'display_name' => 'Edit User',
            'description' => 'Edit User',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'delete_user',
            'display_name' => 'Delete User',
            'description' => 'Delete User',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'manage_roles',
            'display_name' => 'Manage Roles',
            'description' => 'Manage Roles',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'create_role',
            'display_name' => 'Create Role',
            'description' => 'Create Role',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'edit_role',
            'display_name' => 'Edit Role',
            'description' => 'Edit Role',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'delete_role',
            'display_name' => 'Delete Role',
            'description' => 'Delete Role',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'manage_permissions',
            'display_name' => 'Manage Permissions',
            'description' => 'Manage Permissions',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'create_permission',
            'display_name' => 'Create Permission',
            'description' => 'Create Permission',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'edit_permission',
            'display_name' => 'Edit Permission',
            'description' => 'Edit Permission',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'delete_permission',
            'display_name' => 'Delete Permission',
            'description' => 'Delete Permission',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'manage_posts',
            'display_name' => 'Manage Posts',
            'description' => 'Manage Posts',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'manage_comments',
            'display_name' => 'Manage Comments',
            'description' => 'Manage Comments',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ],
        [
            'name' => 'manage_blogs',
            'display_name' => 'Manage Blogs',
            'description' => 'Manage Blogs',
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ]
        ] ;

        DB::table('permissions')->insert($permissions);
    }
}
