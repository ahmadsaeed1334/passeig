<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'admin dashboard',
                'guard_name' => 'web',
                'created_at' => '2022-10-01 15:01:18',
                'updated_at' => '2022-10-01 15:54:57',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'manage staff',
                'guard_name' => 'web',
                'created_at' => '2022-10-01 15:01:44',
                'updated_at' => '2022-10-01 15:01:44',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'manage roles',
                'guard_name' => 'web',
                'created_at' => '2022-10-01 15:01:48',
                'updated_at' => '2022-10-01 15:01:48',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'manage permissions',
                'guard_name' => 'web',
                'created_at' => '2022-10-01 15:01:54',
                'updated_at' => '2022-10-01 15:01:54',
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'manage settings',
                'guard_name' => 'web',
                'created_at' => '2022-10-01 15:02:00',
                'updated_at' => '2022-10-01 15:02:00',
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'manage vendor',
                'guard_name' => 'web',
                'created_at' => '2022-10-01 17:43:30',
                'updated_at' => '2022-10-01 17:43:30',
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'manage customer',
                'guard_name' => 'web',
                'created_at' => '2022-10-01 17:53:08',
                'updated_at' => '2022-10-01 17:53:08',
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'request view',
                'guard_name' => 'web',
                'created_at' => '2022-10-06 14:53:29',
                'updated_at' => '2022-10-06 14:53:29',
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'manage reports',
                'guard_name' => 'web',
                'created_at' => '2022-10-07 06:11:16',
                'updated_at' => '2022-10-07 06:11:16',
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'manage applications',
                'guard_name' => 'web',
                'created_at' => '2022-10-07 06:54:02',
                'updated_at' => '2022-10-07 06:54:02',
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'online users',
                'guard_name' => 'web',
                'created_at' => '2022-10-07 09:12:32',
                'updated_at' => '2022-10-07 09:12:32',
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'manage backups',
                'guard_name' => 'web',
                'created_at' => '2022-10-07 09:12:32',
                'updated_at' => '2022-10-07 09:12:32',
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'super staff',
                'guard_name' => 'web',
                'created_at' => '2022-10-07 09:12:32',
                'updated_at' => '2022-10-07 09:12:32',
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'super roles',
                'guard_name' => 'web',
                'created_at' => '2022-10-07 09:12:32',
                'updated_at' => '2022-10-07 09:12:32',
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'super permissions',
                'guard_name' => 'web',
                'created_at' => '2022-10-07 09:12:32',
                'updated_at' => '2022-10-07 09:12:32',
            ),
        ));
    }
}
