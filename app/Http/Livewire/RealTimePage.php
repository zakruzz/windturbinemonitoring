<?php

namespace App\Http\Livewire;

use App\Http\Traits\GraphTrait;
use App\Models\ConfigData;
use App\Models\RecordData;
use Livewire\Component;

class RealTimePage extends Component{
    use GraphTrait;

    public $lastData, $configData;
    public $range_speed;

    public function mount(){
        $this->configData       = ConfigData::find(1);
    }

    public function refreshPage(){
        $data       = RecordData::latest()->take(250)->get();

        $this->lastData = RecordData::latest()->first();

        $this->dispatchBrowserEvent("refreshData", $this->plotGraph($data));
    }

    public function showConfig(){
        $this->dispatchBrowserEvent('showModalConfig');
    }

    public function onChangeRangeSpeed(){
        $this->configData->pwm      = $this->range_speed;
        $this->configData->save();
    }

    public function updateConfig(){
        $this->range_speed      = intval($this->configData->pwm);
    }

    public function render(){

        $this->updateConfig();

        return view('livewire.real-time-page')
            ->extends('layouts.app')->section('content');
    }
}
