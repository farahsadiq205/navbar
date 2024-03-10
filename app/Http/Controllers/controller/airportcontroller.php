<?php

namespace App\Http\Controllers\controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class airportcontroller extends Controller
{
    public function index()
    {

        return view('AIRPORTS/airports');
    }

}
