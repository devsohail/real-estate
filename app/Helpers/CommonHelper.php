<?php

use Illuminate\Support\Str;

function changeDateFormate($date, $date_format)
{
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);
}

function calculateRemainingDays($created_at)
{
    $date = \Carbon\Carbon::create($created_at);
    $date = $date->addYear();
    $diff = $date->diffInDays(\Carbon\Carbon::now());
    echo $diff;
}

if (!function_exists('pre')) {
    function pre($arr, $e = 0, $msg = '', $isHidden = 0)
    {
        if ($isHidden) {
            echo "<!--";
        }
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        if ($msg != '') {
            echo $msg;
        }
        if ($e == 1) {
            exit;
        }
        if ($isHidden) {
            echo "-->";
        }
    }
}
if(!function_exists('str_slug')){
    function str_slug($str){
        return Str::slug($str);
    }
}
if(!function_exists('str_limit')){
    function str_limit($string,$limit){
        return Str::limit($string, $limit);
    }
}