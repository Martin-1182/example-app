<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    public $successMessage;

    protected $rules = [
        'name' => 'required|min:5',
        'email' => 'required|email',
        'phone' => 'required|digits:10',
        'message' => 'required|min:6',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function submitForm()
    {

        $data = $this->validate();

        $data['name'] = $this->name;
        $data['email'] = $this->email;
        $data['phone'] = $this->phone;
        $data['message'] = $this->message;

        sleep(1);
        
        Mail::to(auth()->user()->email)->send(new ContactMail($data));
        $this->successMessage = 'Message has been successfully send';
        $this->resetForm();


    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->message = '';
    }


    public function render()
    {
        return view('livewire.contact-form');
    }
}
