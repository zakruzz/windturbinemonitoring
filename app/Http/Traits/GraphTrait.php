<?php

namespace App\Http\Traits;

use Carbon\Carbon;

trait GraphTrait{

    public function plotGraph($data){
        $dataX  = [];
        $dataV1 = $data->pluck('voltage_1')->toArray();
        $dataV2 = $data->pluck('voltage_2')->toArray();
        $dataC1 = $data->pluck('current_1')->toArray();
        $dataC2 = $data->pluck('current_2')->toArray();
        $dataR1 = $data->pluck('rpm_1')->toArray();
        $dataR2 = $data->pluck('rpm_2')->toArray();
        $dataP1 = $data->pluck('power_1')->toArray();
        $dataP2 = $data->pluck('power_2')->toArray();

        foreach ($data as $value){
            $dataX[] = Carbon::make($value->created_at)->format('H:i:s');
        }

        return [
            'data_v1' => array_reverse(array_map('floatval', $dataV1)),
            'data_v2' => array_reverse(array_map('floatval', $dataV2)),
            'data_c1' => array_reverse(array_map('floatval', $dataC1)),
            'data_c2' => array_reverse(array_map('floatval', $dataC2)),
            'data_r1' => array_reverse(array_map('floatval', $dataR1)),
            'data_r2' => array_reverse(array_map('floatval', $dataR2)),
            'data_p1' => array_reverse(array_map('floatval', $dataP1)),
            'data_p2' => array_reverse(array_map('floatval', $dataP2)),
            'data_x' => array_reverse($dataX),
        ];
    }

}
