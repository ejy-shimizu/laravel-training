<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function add()
    {
        return 'add2!';
    }

    public function test1()
    {
        return view('test1');
    }

    public function test2()
    {
        return view('test2', ['text' => 'hello-Laravel']);
    } 



}
