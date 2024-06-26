<?php

namespace App\Http\Livewire;

use App\Http\Traits\GraphTrait;
use App\Models\RecordData;
use Livewire\Component;

class GraphicPage extends Component
{
    use GraphTrait;

    public $lastData;

    public function refreshPage()
    {
        $data       = RecordData::latest()->take(250)->get();

        $this->lastData = RecordData::latest()->first();

        $this->dispatchBrowserEvent("refreshData", $this->plotGraph($data));
    }

    public function render()
    {
        return view('livewire.graphic-page')
            ->extends('layouts2.app')->section('content2');
    }
}
