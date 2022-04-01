<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::factory()->count(1)->create(['name' => 'company','slug' => 'company']);
        Role::factory()->count(1)->create(['name' => 'developer','slug' => 'developer']);
    }
}
