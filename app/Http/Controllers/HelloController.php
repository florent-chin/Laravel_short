<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function index()
    {
        return "建物です";
    }

    public function end($room){
        return '部屋番号は'.$room.'です';
    }
}