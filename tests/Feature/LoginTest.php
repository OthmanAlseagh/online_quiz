<?php

namespace Tests\Feature;

use App\Models\User;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
//    use RefreshDatabase;


    /** @test */
    public function a_user_can_login()
    {

        $response = $this->post('login',[
            'email' => 'admin@admin.com',
            'password' =>'123456789'
        ]);

        $response->assertStatus(200);
    }

    /** @test */
    public function email_and_password_validation_required()
    {
        $response = $this->post('login',[
            'email' => '',
            'password' =>''
        ]);
        $response->assertStatus(422);
    }

    /** @test */
    public function email_validation_email()
    {
        $response = $this->post('login',[
            'email' => 'email',
        ]);
        $response->assertStatus(422);
    }

    /** @test */
    public function password_validation_email()
    {
        $response = $this->post('login',[
            'password' =>231465498
        ]);
        $response->assertStatus(422);
    }
}
