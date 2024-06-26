<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserPage extends Component{
    public function render(){
        return view('livewire.user-page')
            ->extends('layouts.app')->section('content');
    }
}
