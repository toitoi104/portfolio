<?php

namespace App\Http\Controllers\APP\JsTrick;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('JsTrick/index');
    }

    public function changeShow()
    {
        return view('JsTrick/changeShow');
    }
}