<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ConfigData;
use App\Models\Measurement;
use App\Models\MeasurementDevice;
use App\Models\MeasurementRecord;
use App\Models\RecordData;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiController extends Controller{

    public function post(Request $request) : JsonResponse{
        try {

            $data               = new RecordData();
            $data->voltage_1    = $request->voltage_1;
            $data->voltage_2    = $request->voltage_2;
            $data->current_1    = $request->current_1;
            $data->current_2    = $request->current_2;
            $data->rpm_1        = $request->rpm_1;
            $data->rpm_2        = $request->rpm_2;
            $data->power_1        = $request->power_1;
            $data->power_2        = $request->power_2;

            $data->save();

            return Response::json([
                'messages' => 'Success'
            ], 200);

        }catch (\Exception $exception){
            return Response::json([
                'messages' => 'Internal Server Error'
            ], 500);
        }
    }

    public function get(Request $request) : JsonResponse{
        try {

            $data               = ConfigData::find(1);

            return Response::json([
                'messages' => 'Success',
                'data' => [
                    'pwm' => intval($data->pwm)
                ]
            ], 200);

        }catch (\Exception $exception){
            return Response::json([
                'messages' => 'Internal Server Error'
            ], 500);
        }
    }

}
