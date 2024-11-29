<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // User::factory(10)->create();

    User::factory()->create([
      'name' => 'Admin',
      'email' => 'admin@citytaxi.local',
      'role' => 'Passenger',
      'first_name' => 'Application',
      'last_name' => 'Admin',
      'nic_no' => '123456789V',
      'profile_pic' => '',
      'mobile_no' => '0712345678',
      'birth_day' => '1996/02/07',
      'address' => 'Local Address, City, Country',
      'city' => 'Colombo',
      'district' => 'Colombo'
    ]);

    Role::factory()->createMany([
      ['role_name' => 'admin'],
      ['role_name' => 'agent'],
      ['role_name' => 'driver'],
      ['role_name' => 'Passenger']
    ]);
  }
}
