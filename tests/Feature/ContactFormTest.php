<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;
use Livewire\Livewire;

class ContactFormTest extends TestCase
{
    public function test_contact_form_sends_email_and_flashes_success()
    {
        Mail::fake();

        Livewire::test(\App\Livewire\ContactForm::class)
            ->set('name', 'John Doe')
            ->set('email', 'john@example.com')
            ->set('message', 'Test message')
            ->call('submit')
            ->assertEmitted('contactSent');

        $this->assertTrue(session()->has('success'));

        Mail::assertSent(ContactMessage::class, function ($mail) {
            return $mail->data['email'] === 'john@example.com';
        });
    }
}
