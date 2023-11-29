<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class CategoryControllerTest extends TestCase
{
    private string $categoryEndpoint = '/api/categories';

    public function test_category()
    {
        $response = $this->setAuth()->getJson($this->categoryEndpoint);

        $response->assertStatus(200);
    }
}
