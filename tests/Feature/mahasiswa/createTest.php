<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class createTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_createtest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}