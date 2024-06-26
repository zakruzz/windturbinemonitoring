<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactPage2 extends Component
{
    public function render()
    {
        return view('livewire.contact-page2')
            ->extends('layouts2.app')->section('content2');
    }
}
