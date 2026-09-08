<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProfilePageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_profile_page_is_accessible_and_shows_correct_data(): void
    {
        $response = $this->get('/profile');

        $response->assertStatus(200);

        $response->assertSee('Muhammad Arief Andriansyah');

        $response->assertSee('24/545740/SV25748');

        $response->assertSee('Teknologi Rekayasa Perangkat Lunak');

        $response->assertSee('Universitas Gadjah Mada');
    }
}
