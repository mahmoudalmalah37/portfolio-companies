<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class ContactCompount extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    /**
     * @throws ValidationException
     */
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
    }

    public function sendMessage()
    {
        try {
            $this->validate([
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required'
            ]);

            $contact = new Contact();
            $contact->name = $this->name;
            $contact->email = $this->email;
            $contact->subject = $this->subject;
            $contact->message = $this->message;
            $contact->save();
            session()->flash('message','Thanks, Your message has been sent successfully!');
        } catch (\Exception $e) {
            session()->flash('error',$e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.contact-compount')->layout('layouts.user');
    }
}
