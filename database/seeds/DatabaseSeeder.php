<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'login' => 'admin',
            'fname' => 'Carl',
            'surname' => 'Surname',  
            'email' => 'admin@gmail.com',
            'phone' => '781111447',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'login' => 'user',
            'fname' => 'Henry',
            'surname' => 'Smith',  
            'email' => 'smith@gmail.com',
            'phone' => '785421447',
            'password' => bcrypt('password'),
        ]);

        DB::table('courts')->insert([
            'court_name' => 'Default Court',
            'surface' => 'grass',
            'under_construction' => 0,  
        ]);
        DB::table('courts')->insert([
            'court_name' => 'Another Court',
            'surface' => 'clay',
            'under_construction' => 0,  
        ]);
        DB::table('courts')->insert([
            'court_name' => 'Newest Court',
            'surface' => 'clay',
            'under_construction' => 1,  
        ]);

        DB::table('roles')->insert([
            'name' => 'admin',
            'label' => 'Administrator',
        ]);

        DB::table('roles')->insert([
            'name' => 'user',
            'label' => 'User',
        ]);

        DB::table('permissions')->insert([
            'name' => 'create_court',
            'label' => 'Create court',
        ]);

        DB::table('permissions')->insert([
            'name' => 'update_court',
            'label' => 'Update court and delete',
        ]);

        DB::table('permissions')->insert([
            'name' => 'create_booking',
            'label' => 'Create a booking',
        ]);


        DB::table('permission_role')->insert([
            'permission_id' => 1,
            'role_id' => 1,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 2,
            'role_id' => 1,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 3,
            'role_id' => 1,
        ]);

        DB::table('permission_role')->insert([
            'permission_id' => 3,
            'role_id' => 2,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 2,
        ]);


    }
}
