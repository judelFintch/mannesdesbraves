<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $data = $this->validate();

        try {
            Mail::to(config('mail.from.address') ?: env('MAIL_TO'))->send(new \App\Mail\ContactMessage($data));
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
