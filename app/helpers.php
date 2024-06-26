<?php

use \App\Models\Core\WebsiteConfiguration;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use \Psy\Util\Json;

if (!function_exists('limit_decimal')){
    function limit_decimal($decimal): string{
        return number_format( $decimal, 2, '.', '');
    }
}

if (!function_exists('insert_error_log')){
    function insert_error_log($menu, $message){
        Log::channel('systemlog')->error("{$menu} :: {$message}");
    }
}
