<?php

namespace Tests;

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseMigrations;

    public string $accessToken;

    protected function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate:refresh  --env=testing --seed');
    }

    private function getLoginUser()
    {
        $user = User::first();

        return $user;
    }

    public function setAuth()
    {
        $user = $this->getLoginUser();
        $this->accessToken = JWTAuth::fromUser($user);

        return $this->withHeaders([
            'Authorization' => 'Bearer ' . $this->accessToken,
            'Accept'        => 'application/json',
        ]);
    }

}
