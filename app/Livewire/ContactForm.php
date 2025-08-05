<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);
    }

    public function submit()
    {
        $validated = $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);

        // Acá podrías guardar en la base de datos o enviar un correo

        $this->reset();
        session()->flash('success', '¡Mensaje enviado correctamente!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
