<?php

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
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin1234'),            
        ]);
        DB::table('users')->insert([
            'id' => '2',
            'name' => 'vendor',
            'email' => 'vendor@vendor.com',
            'password' => bcrypt('vendor1234'),            
        ]);
        DB::table('users')->insert([
            'id' => '3',
            'name' => 'employee',
            'email' => 'employee@employee.com',
            'password' => bcrypt('employee1234'),            
        ]);
    }
}
