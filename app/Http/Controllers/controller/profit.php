<?php

namespace App\Http\Controllers\controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profit extends Controller
{
    public function index()
    {

        return view('PROFIT/profit');
    }

    public function sale()
    {

        return view('SALES/sales');
    }

    public function schools()
    {

        return view('SCHOOL/school');
    }

    public function student()
    {

        return view('STUDENTS/students');
    }

    public function uni()
    {

        return view('UNIVERSITY/university');
    }

    public function worker()
    {

        return view('WORKERS/workers');
    }

}
