<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleHasPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        \DB::table('role_has_permissions')->delete();

        \DB::table('role_has_permissions')->insert(array(
            0 =>
            array(
                'permission_id' => 1,
                'role_id' => 1,
            ),
            1 =>
            array(
                'permission_id' => 2,
                'role_id' => 1,
            ),
            2 =>
            array(
                'permission_id' => 3,
                'role_id' => 1,
            ),
            3 =>
            array(
                'permission_id' => 4,
                'role_id' => 1,
            ),
            4 =>
            array(
                'permission_id' => 5,
                'role_id' => 1,
            ),
            5 =>
            array(
                'permission_id' => 6,
                'role_id' => 1,
            ),
            6 =>
            array(
                'permission_id' => 7,
                'role_id' => 1,
            ),
            7 =>
            array(
                'permission_id' => 8,
                'role_id' => 1,
            ),
            8 =>
            array(
                'permission_id' => 9,
                'role_id' => 1,
            ),
            9 =>
            array(
                'permission_id' => 10,
                'role_id' => 1,
            ),
            10 =>
            array(
                'permission_id' => 11,
                'role_id' => 1,
            ),
            11 =>
            array(
                'permission_id' => 12,
                'role_id' => 1,
            ),
            12 =>
            array(
                'permission_id' => 13,
                'role_id' => 1,
            ),
            13 =>
            array(
                'permission_id' => 14,
                'role_id' => 1,
            ),
            14 =>
            array(
                'permission_id' => 15,
                'role_id' => 1,
            ),
            15 =>
            array(
                'permission_id' => 1,
                'role_id' => 2,
            ),
            16 =>
            array(
                'permission_id' => 2,
                'role_id' => 2,
            ),
            17 =>
            array(
                'permission_id' => 3,
                'role_id' => 2,
            ),
            18 =>
            array(
                'permission_id' => 4,
                'role_id' => 2,
            ),
            19 =>
            array(
                'permission_id' => 5,
                'role_id' => 2,
            ),
            20 =>
            array(
                'permission_id' => 6,
                'role_id' => 2,
            ),
            21 =>
            array(
                'permission_id' => 7,
                'role_id' => 2,
            ),
            22 =>
            array(
                'permission_id' => 8,
                'role_id' => 2,
            ),
            23 =>
            array(
                'permission_id' => 9,
                'role_id' => 2,
            ),
            24 =>
            array(
                'permission_id' => 10,
                'role_id' => 2,
            ),
            25 =>
            array(
                'permission_id' => 11,
                'role_id' => 2,
            ),
        ));
    }
}
