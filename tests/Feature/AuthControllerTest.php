<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    private string $loginEndpoint    = '/api/auth/login';
    private string $registerEndpoint = '/api/auth/register';
    private string $logoutEndpoint   = '/api/auth/logout';

    public function test_login_success()
    {
        $userData = [
            'email'    => 'admintiki@gmail.com',
            'password' => '12345678'
        ];

        $response = $this->postJson($this->loginEndpoint, $userData);

        $response->assertJsonStructure([
            'data' => [
                'user',
                'access_token',
                'token_type',
                'expires_in'
            ]
        ])->assertStatus(200);
    }

    public function test_login_fail()
    {
        $userData = [
            'email'    => 'admintiki@gmail.com',
            'password' => '123456789'
        ];

        $response = $this->postJson($this->loginEndpoint, $userData);

        $response->assertStatus(401)->assertJsonStructure([
            'success',
            'message',
            'data'
        ]);
    }

    public function test_register_user_success()
    {
        $userData = [
            'full_name'        => "Trần Quang Thái",
            'email'            => 'tranquangthai.10102003@gmail.com',
            'password'         => '12345678',
            'confirm_password' => '12345678',
            'type'             => User::USER,
            'shop_id'          => null,
            'status'           => User::ACTIVE,
            'position'         => null
        ];

        $response = $this->postJson($this->registerEndpoint, $userData);

        $response->assertJsonStructure([
            'data' => [
                "full_name",
                "email",
                "type",
                "shop_id",
                "status",
                "position",
                "updated_at",
                "created_at",
                "id"
            ]
        ])->assertStatus(200);
    }

    public function test_register_email_taken()
    {
        $userData = [
            'full_name'        => "Trần Quang Thái",
            'email'            => 'admintiki@gmail.com',
            'password'         => '12345678',
            'confirm_password' => '12345678',
            'type'             => User::USER,
            'shop_id'          => null,
            'status'           => User::ACTIVE,
            'position'         => null
        ];

        $response = $this->postJson($this->registerEndpoint, $userData);

        $response->assertStatus(422)
            ->assertJson([
                "message" => "Validation failed",
                "errors"  => [
                    "email" => [
                        "The Email has already been taken."
                    ]
                ]
            ]);
    }

    public function test_register_password_not_match()
    {
        $userData = [
            'full_name'        => "Trần Quang Thái",
            'email'            => 'testuser@example.com',
            'password'         => '12345678',
            'confirm_password' => '87654321',
            'type'             => User::USER,
            'shop_id'          => null,
            'status'           => User::ACTIVE,
            'position'         => null
        ];

        $response = $this->postJson($this->registerEndpoint, $userData);

        $response->assertStatus(422)
            ->assertJson([
                'message' => 'Validation failed',
                'errors'  => [
                    'confirm_password' => ['The Confirm password and Password must match.']
                ]
            ]);
    }

    public function test_user_logout()
    {
        $response = $this->setAuth()->postJson($this->logoutEndpoint);

        $response->assertJsonStructure([
            'success',
            'message',
            'data'
        ])->assertStatus(200);
    }
}
