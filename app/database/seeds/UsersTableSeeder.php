<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $users = array(

            //Argo users 
            //super_admin 
            array(
                'username'              => 'admin',
                'email'                 => 'admin@argo.com',
                'password'              => Hash::make('admin'),
                'confirmed'             => 1,
                'confirmation_code'     => md5(microtime().Config::get('app.key')),
                'created_at'            => new DateTime,
                'updated_at'            => new DateTime,
                'date_of_joining'       => '26/08/2006',
                'qualification'         => 'BS',
                'registration_number'   => 'REG001HOST',
                'telephone_number'      => '+91-9920200323',
                'photo_filepath'        => 'photo5.png',
                'signature_filepath'    => 'sign5.png',
            ),
        
            //medical_officer 
            array(
                'username'              => 'medical_officer1',
                'email'                 => 'medical_officer1@argo.com',
                'password'              => Hash::make('medical_officer1'),
                'confirmed'             => 1,
                'confirmation_code'     => md5(microtime().Config::get('app.key')),
                'created_at'            => new DateTime,
                'updated_at'            => new DateTime,
                'date_of_joining'       => '04/02/2001',
                'qualification'         => 'MBBS, MD',
                'registration_number'   => 'REG002HOST',
                'telephone_number'      => '+91-9923233323',
                'photo_filepath'        => 'photo1.png',
                'signature_filepath'    => 'sign1.png',
            ),

            //medio_legal_consultant 
            array(
                'username'              => 'medio_legal1',
                'email'                 => 'medio_legal1@argo.com',
                'password'              => Hash::make('medio_legal1'),
                'confirmed'             => 1,
                'confirmation_code'     => md5(microtime().Config::get('app.key')),
                'created_at'            => new DateTime,
                'updated_at'            => new DateTime,
                'date_of_joining'       => '04/12/2011',
                'qualification'         => 'MBBS, MD, FRCH',
                'registration_number'   => 'REG202HOST',
                'telephone_number'      => '+91-8903233323',
                'photo_filepath'        => 'photo2.png',
                'signature_filepath'    => 'sign2.png',
            ),

            //nursing_staff 
            array(
                'username'              => 'nursing_staff1',
                'email'                 => 'nursing_staff1@argo.com',
                'password'              => Hash::make('nursing_staff1'),
                'confirmed'             => 1,
                'confirmation_code'     => md5(microtime().Config::get('app.key')),
                'created_at'            => new DateTime,
                'updated_at'            => new DateTime,
                'date_of_joining'       => '14/05/2009',
                'qualification'         => 'BDDS',
                'registration_number'   => 'REG222HOST',
                'telephone_number'      => '+91-4923233323',
                 'photo_filepath'       => 'photo3.png',
                'signature_filepath'    => 'sign3.png',
            ),

            //hospital_admin 
            array(
                'username'              => 'hospital_admin1',
                'email'                 => 'hospital_admin1@argo.com',
                'password'              => Hash::make('hospital_admin1'),
                'confirmed'             => 1,
                'confirmation_code'     => md5(microtime().Config::get('app.key')),
                'created_at'            => new DateTime,
                'updated_at'            => new DateTime,
                'date_of_joining'       => '26/08/2006',
                'qualification'         => 'BS',
                'registration_number'   => 'REG212HOST',
                'telephone_number'      => '+91-9920200323',
                'photo_filepath'        => 'photo4.png',
                'signature_filepath'    => 'sign4.png',
            )
        );

        DB::table('users')->insert( $users );
    }

}
