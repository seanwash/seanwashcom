<?php

namespace Tests\Feature;

use Tests\TestCase;

class SmokeTest extends TestCase
{
    public function test_the_homepage_can_render()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_uses_page_can_render()
    {
        $response = $this->get('/uses');

        $response->assertStatus(200);
    }

    public function test_the_bookmarks_page_can_render()
    {
        $response = $this->get('/bookmarks');

        $response->assertStatus(200);
    }
}
