<?php

class PermissionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('permissions')->delete();


        $permissions = array(
            array(
                'name'      => 'manage_forms',
                'display_name'      => 'manage forms'
            ),
            array(
                'name'      => 'view_forms',
                'display_name'      => 'view forms'
            ),
            array(
                'name'      => 'approve_forms',
                'display_name'      => 'approve forms'
            ),
            array(
                'name'      => 'manage_users',
                'display_name'      => 'manage users'
            ),
            array(
                'name'      => 'manage_roles',
                'display_name'      => 'manage roles'
            ),
        );

        DB::table('permissions')->insert( $permissions );

        DB::table('permission_role')->delete();

        $permissions = array(
            array(
                'role_id'      => 1,
                'permission_id' => 1
            ),
            array(
                'role_id'      => 1,
                'permission_id' => 2
            ),
            array(
                'role_id'      => 1,
                'permission_id' => 3
            ),
            array(
                'role_id'      => 1,
                'permission_id' => 4
            ),
            array(
                'role_id'      => 1,
                'permission_id' => 5
            ),
            array(
                'role_id'      => 2,
                'permission_id' => 1
            ),
            array(
                'role_id'      => 2,
                'permission_id' => 2
            ),
        );

        DB::table('permission_role')->insert( $permissions );
    }

}
