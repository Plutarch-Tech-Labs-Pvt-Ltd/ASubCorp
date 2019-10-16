<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => '1',
            'name' => 'admin',
            'description' => 'A user with admin privilege',
        ]);

        DB::table('roles')->insert([
            'id' => '2',
            'name' => 'vendor',
            'description' => 'A user with vendor privilege',
        ]);

        DB::table('roles')->insert([
            'id' => '3',
            'name' => 'employee',
            'description' => 'A user with employee privilege',
        ]);
    }
}
