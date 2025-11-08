<?php

namespace Tests\Feature;

use Modules\User\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testRegisterForm()
    {
        $response = $this->get(route('register'));
        $response->assertStatus(200);
    }

    public function testUserCanRegister()
    {
        $response = $this->post(route('register'), [
            'name'=>'mmr',
            'email'=>'mrymjh1234@gmail.com',
            'password'=>'123456klkl',
            'password_confirmation'=>'123456klkl'
        ]);
        $response->assertStatus(302);
    }
    public function testLoginForm()
    {
        $response = $this->get(route('login'));
        $response->assertStatus(200);
    }
//    public function testUserCanLogin(){
//        $user = User::factory()->create([
//                'password'=> bcrypt('123456klkl'),
//            ]);
//        $response = $this->post(route('login'), [
//            'email'=>$user->email,
//            'password'=>'wrongpassword',
//        ]);
//        $response->assertStatus(302);
//        $this->assertGuest();
//    }
}























