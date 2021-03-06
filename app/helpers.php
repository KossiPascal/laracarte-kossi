<?php

use Illuminate\Support\Facades\Route;
if (!function_exists('pageTitle')) {
    function pageTitle($title)
    {
       // $base_title = config('app.name');
        $base_title=env('APP_NAME');
        if ($title === '') {
            return $base_title;
        } else {
            return $title . ' | ' . $base_title;
        }
    }
}

if (!function_exists('setActiveRoot')) {
    function setActiveRoot($route)
    {
        return Route::is($route) ? 'active' : '';
    }
}


if(!function_exists('getCurrentForSrOnly')){
    function getCurrentForSrOnly($route){
        if (setActiveRoot($route)!=='') {
            return '<span class="sr-only">(current)</span>';
        }
    }
}