<?php

namespace Tests\Unit;

use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testRoute()
    {
        $this->get('/api/products')->assertStatus(200);
    }
}
