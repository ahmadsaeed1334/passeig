<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        \DB::table('users')->delete();

        \DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'System',
                'email' => 'ahmadsaeed@gmail.com',
                'phone' => 3046255015,
                'email_verified_at' => '2024-01-01 20:00:31',
                'password' => '$2y$12$R1d0/WS7EpoxPtQHXGxMeuI1t7nV7XI55GPx23mv1jEZLEmOl3nyK',
                'status' => 1,
                'user_type' => -1,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                // 'two_factor_confirmed_at' => NULL,
                'remember_token' => '$2y$12$R1d0/WS7EpoxPtQHXGxMeuI1t7nV7XI55GPx23mv1jEZLEmOl3nyK',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-01-01 20:00:31',
                'updated_at' => '2024-01-01 20:00:31',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'phone' => 3046255015,
                'email_verified_at' => NULL,
                'password' => '$2y$12$R1d0/WS7EpoxPtQHXGxMeuI1t7nV7XI55GPx23mv1jEZLEmOl3nyK',
                'status' => 1,
                'user_type' => 0,
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                // 'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2024-01-01 20:00:31',
                'updated_at' => '2024-01-01 20:00:31',
            ),
        ));
    }
}
