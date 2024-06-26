<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tamplate extends Component
{
    public function render()
    {
        return view('livewire.tamplate')
            ->extends('layouts2.app')->section('content2');
    }
}
