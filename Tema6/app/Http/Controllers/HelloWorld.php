<?php

namespace App\Http\Controllers;

use App\Models\Hello;

class HelloWorld extends Controller
{
    public function sayHello()
    {
        return view('hello', ["message" => Hello::helloWorldMessage()]);
    }
}
