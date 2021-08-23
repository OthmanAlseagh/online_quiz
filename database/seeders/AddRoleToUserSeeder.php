<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AddRoleToUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }

    public function getUsers(){
        return User::select('id','email')->get();
    }

    public function getRoles(){
        return Role::select('id','name')->get();
    }
}
