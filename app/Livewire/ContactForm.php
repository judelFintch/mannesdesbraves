<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    public bool $showHeader = true;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string|max:2000',
    ];

    public function submit()
    {
        $rateKey = 'contact-form:'.request()->ip();
        if (RateLimiter::tooManyAttempts($rateKey, 5)) {
            session()->flash('error', __('Too many attempts. Please try again in a few minutes.'));
            return;
        }
        RateLimiter::hit($rateKey, 300);

        $data = $this->validate();

        try {
            $recipient = config('mail.to.address') ?: config('mail.from.address');
            if (! $recipient) {
                throw new \RuntimeException('Missing contact recipient address.');
            }
            Mail::to($recipient)->send(new \App\Mail\ContactMessage($data));
            session()->flash('success', __('Your message has been sent. We will reply soon.'));
            $this->reset(['name', 'email', 'message']);
            $this->emit('contactSent');
        } catch (\Exception $e) {
            report($e);
            session()->flash('error', __('An error occurred while sending your message.'));
        }
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
