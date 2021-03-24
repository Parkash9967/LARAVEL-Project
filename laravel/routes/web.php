<?php

use Illuminate\Support\Facades\Route;

use App\BaseController\HomeController;

Route :: get('/',function() {
    return view('Login');
});



