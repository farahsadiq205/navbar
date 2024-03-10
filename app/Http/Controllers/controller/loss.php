<?php

namespace App\Http\Controllers\controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loss extends Controller
{
    public function index()
    {

        return view('LOSS/loss');
    }

}
