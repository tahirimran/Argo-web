<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        /*
        $adminRole = new Role;
        $adminRole->name = 'admin';
        $adminRole->save();

        $commentRole = new Role;
        $commentRole->name = 'comment';
        $commentRole->save();
        */

        /*  Argo roles  */
        /* Super Admin */
        $super_admin = new Role;
        $super_admin->name = 'admin';
        $super_admin->save();

        /* Medical officer/ Duty doctor */
        $medical_officer = new Role;
        $medical_officer->name = 'medical_officer';
        $medical_officer->save();

        /* Medio Legal Consultant/ Incharge Doctor */
        $medio_legal = new Role;
        $medio_legal->name = 'medio_legal';
        $medio_legal->save();

        /* Nursing staff */
        $nursing_staff = new Role;
        $nursing_staff->name = 'nursing_staff';
        $nursing_staff->save();

         /* Hospital Admin */
        $hospital_admin = new Role;
        $hospital_admin->name = 'hospital_admin';
        $hospital_admin->save();

        $user = User::where('username','=','admin')->first();
        $user->attachRole( $super_admin );

        $user = User::where('username','=','medical_officer1')->first();
        $user->attachRole( $medical_officer );

        $user = User::where('username','=','medio_legal1')->first();
        $user->attachRole( $medio_legal );

        $user = User::where('username','=','nursing_staff1')->first();
        $user->attachRole( $nursing_staff );

        $user = User::where('username','=','hospital_admin1')->first();
        $user->attachRole( $hospital_admin );

        /*
        $user = User::where('username','=','admin')->first();
        $user->attachRole( $adminRole );

        $user = User::where('username','=','user')->first();
        $user->attachRole( $commentRole );
        */
    }

}
