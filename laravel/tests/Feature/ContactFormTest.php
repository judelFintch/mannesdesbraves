<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactFormTest extends TestCase
{
    public function test_contact_form_sends_email_and_redirects()
    {
        Mail::fake();

        $response = $this->post(route('contact.send'), [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'message' => 'Test message',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        Mail::assertSent(ContactMessage::class, function ($mail) {
            return $mail->data['email'] === 'john@example.com';
        });
    }
}
