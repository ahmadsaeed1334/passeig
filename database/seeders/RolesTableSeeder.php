<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'guard_name' => 'web',
                'created_at' => '2022-10-01 15:03:00',
                'updated_at' => '2022-10-01 15:03:00',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2022-10-07 08:08:01',
                'updated_at' => '2022-10-07 08:08:01',
            ),
        ));
        
    }
}
