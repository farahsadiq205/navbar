<?php

namespace App\Http\Controllers\controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dams extends Controller
{
    public function index()
    {

        return view('DAMS/dams');
    }

}
