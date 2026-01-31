<?php

use Illuminate\Support\Facades\Auth;

if (! function_exists('is_admin')) {
    function is_admin(): bool
    {
        return Auth::check() && Auth::user()->hasRole('Admin');
    }
}

if (! function_exists(function: 'pr')) {
    function pr($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

if (! function_exists(function: 'prx')) {
    function prx($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        die();
    }
}
