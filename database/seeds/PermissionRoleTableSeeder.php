<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('permission_role')->insert([

            // Superadmin

            // Administrator
            ['role_id' => 2, 'permission_id' => 1],
            ['role_id' => 2, 'permission_id' => 2],
            ['role_id' => 2, 'permission_id' => 3],
            ['role_id' => 2, 'permission_id' => 4],
            ['role_id' => 2, 'permission_id' => 5],
            ['role_id' => 2, 'permission_id' => 6],
            ['role_id' => 2, 'permission_id' => 7],
            ['role_id' => 2, 'permission_id' => 8],
            ['role_id' => 2, 'permission_id' => 9],
            ['role_id' => 2, 'permission_id' => 10],
            ['role_id' => 2, 'permission_id' => 11],
            ['role_id' => 2, 'permission_id' => 12],

            // Manager
            ['role_id' => 3, 'permission_id' => 1],
            ['role_id' => 3, 'permission_id' => 2],
            ['role_id' => 3, 'permission_id' => 3],
            ['role_id' => 3, 'permission_id' => 4],
        ]);
    }
}
