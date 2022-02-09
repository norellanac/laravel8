<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;

class ChatbotsQuestionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = User::factory()->create();
 
        $response = $this->actingAs($user, 'web')
                         ->get('/admin/chatbot/1/edit');

        $response->assertStatus(200);
    }
}
