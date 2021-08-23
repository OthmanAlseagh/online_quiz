<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('123456789');

        $emails = [
            'admin@admin.com',
            'manager@manager.com',
            'teacher@teacher.com',
            'student@student.com',
        ];
        $avatar = '/tmp/aa0d3dd7137f79f1604f625670bd8607.jpg';
        foreach ($emails as $email){
            $input[] = $this->createUser($email, $password, $avatar);
        }
        User::insert($input);
    }

    public function createUser($email, $password, $avatar)
    {
        return User::factory()->make([
            'password' => $password,
            'email' => $email,
            'avatar' => $avatar,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ])->toArray();
    }
}
