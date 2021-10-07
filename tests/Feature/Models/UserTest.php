<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user()
    {
        User::factory()->create([
            'email' => 'd@admin.com'
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'd@admin.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'no@admin.com'
        ]);
    }
}
