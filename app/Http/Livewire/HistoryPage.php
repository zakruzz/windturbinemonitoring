<?php

namespace App\Http\Livewire;

use App\Http\Traits\GraphTrait;
use App\Models\RecordData;
use Carbon\Carbon;
use Livewire\Component;

class HistoryPage extends Component
{
    use GraphTrait;

    public $date;
    public $data;

    public function mount(){
        $this->data         = [];
    }

    public function submitFilter(){
        if ($this->date){
            $this->data         = RecordData::whereDate('created_at', Carbon::make($this->date)->toDateTimeString())->orderBy('id', 'DESC')->get();
        }
    }

    public function render(){

        if ($this->data){
            $this->dispatchBrowserEvent("refreshData", $this->plotGraph($this->data));
        }

        return view('livewire.history-page')
            ->extends('layouts.app')->section('content');
    }
}
