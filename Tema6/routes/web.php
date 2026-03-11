<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloWorld;

Route::get('/', [HelloWorld::class, 'sayHello']);
