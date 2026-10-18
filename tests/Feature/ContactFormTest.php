<?php

namespace Tests\Feature;

use App\Mail\ContactMessageReceived;
use App\Models\ContactMessage;
use App\Models\Profile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    private array $valid = [
        'name' => 'Rina',
        'email' => 'rina@example.com',
        'message' => 'Hello, I would like to talk about a data project.',
    ];

    protected function setUp(): void
    {
        parent::setUp();
        Profile::create(['name' => 'Owner', 'monogram' => 'OW', 'email' => 'owner@example.com']);
    }

    public function test_valid_message_is_saved_and_emailed(): void
    {
        Mail::fake();

        $this->post('/contact', $this->valid)
            ->assertRedirect(route('home') . '#contact')
            ->assertSessionHas('contact_status');

        $this->assertDatabaseHas('contact_messages', ['email' => 'rina@example.com']);
        Mail::assertSent(ContactMessageReceived::class, fn ($m) => $m->hasTo('owner@example.com'));
        $this->assertNotNull(ContactMessage::first()->emailed_at);
    }

    public function test_invalid_input_is_rejected(): void
    {
        Mail::fake();

        $this->post('/contact', ['name' => '', 'email' => 'not-an-email', 'message' => 'short'])
            ->assertSessionHasErrors(['name', 'email', 'message']);

        $this->assertDatabaseCount('contact_messages', 0);
        Mail::assertNothingSent();
    }

    public function test_honeypot_submissions_are_not_stored(): void
    {
        Mail::fake();

        $this->post('/contact', $this->valid + ['website' => 'http://spam.example'])
            ->assertSessionHas('contact_status');

        $this->assertDatabaseCount('contact_messages', 0);
        Mail::assertNothingSent();
    }

    public function test_message_is_kept_when_email_fails(): void
    {
        Mail::shouldReceive('to')->andThrow(new \RuntimeException('smtp down'));

        $this->post('/contact', $this->valid)->assertSessionHas('contact_status');

        $this->assertDatabaseCount('contact_messages', 1);
        $this->assertNull(ContactMessage::first()->emailed_at);
    }

    public function test_form_is_rate_limited(): void
    {
        Mail::fake();

        for ($i = 0; $i < 5; $i++) {
            $this->post('/contact', $this->valid);
        }

        $this->post('/contact', $this->valid)->assertStatus(429);
    }
}
