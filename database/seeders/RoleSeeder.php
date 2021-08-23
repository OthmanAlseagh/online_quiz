<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'manager',
            'teacher',
            'student',
        ];
        foreach ($roles as  $role) {
            Role::create(['guard_name' =>'api', 'name' => $role]);
        }
    }
}
