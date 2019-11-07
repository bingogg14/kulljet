<?php

use Illuminate\Support\Facades\Route;

function setActiveLink($nameRoute, $active = 'active'){
    return (Route::currentRouteName() == $nameRoute) ? $active : '';
}
