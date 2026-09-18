<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_home_page_loads_successfully(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('John Paul');
        $response->assertSee('cmndrpaul');
        $response->assertSee('12+');
        $response->assertSee('3+');
        $response->assertSee('100%');
    }

    public function test_projects_index_loads_successfully(): void
    {
        $response = $this->get('/projects');
        $response->assertStatus(200);
        $response->assertSee('Project Archive');
    }

    public function test_project_show_page_loads_successfully(): void
    {
        $response = $this->get('/projects/splashsafe');
        $response->assertStatus(200);
        $response->assertSee('SplashSafe');
    }

    public function test_certificates_page_loads_successfully(): void
    {
        $response = $this->get('/certificates');
        $response->assertStatus(200);
        $response->assertSee('Certificates & Credentials');
    }

    public function test_chat_api_get_messages(): void
    {
        $response = $this->getJson('/api/chat/messages');
        $response->assertStatus(200);
        $response->assertJsonStructure(['status', 'messages', 'online_count']);
    }

    public function test_chat_api_send_message(): void
    {
        $response = $this->postJson('/api/chat/messages', [
            'username' => 'Test User',
            'message' => 'Hello from unit test!',
        ]);
        $response->assertStatus(200);
        $response->assertJsonPath('status', 'success');
        $this->assertDatabaseHas('chat_messages', [
            'username' => 'Test User',
            'message' => 'Hello from unit test!',
        ]);
    }

    public function test_cv_request_api(): void
    {
        $response = $this->postJson('/api/cv/request', [
            'name' => 'Recruiter Jane',
            'email' => 'jane@techrecruiting.com',
            'company' => 'Tech Corp',
            'message' => 'We have an open role for you!',
        ]);
        $response->assertStatus(200);
        $response->assertJsonPath('status', 'success');
        $this->assertDatabaseHas('cv_requests', [
            'name' => 'Recruiter Jane',
            'email' => 'jane@techrecruiting.com',
        ]);
    }
}
