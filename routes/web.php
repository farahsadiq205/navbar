<?php

use Illuminate\Support\Facades\Route;

/*use App\Http\Controllers\controller\customcontroller;
use App\Http\Controllers\controller\airportcontroller;
use App\Http\Controllers\controller\busstationcontroller;
use App\Http\Controllers\controller\college;
use App\Http\Controllers\controller\dams;
use App\Http\Controllers\controller\electronics;
use App\Http\Controllers\controller\employees;
use App\Http\Controllers\controller\human;
use App\Http\Controllers\controller\loss;
use App\Http\Controllers\controller\profit;
use App\Http\Controllers\controller\cardscontroller;
use App\Http\Controllers\controller\ifcontroller;
use App\Http\Controllers\controller\cosmaticscontroller;
use App\Http\Controllers\controller\jewellerycontroller;
use App\Http\Controllers\controller\transportcontroller;*/

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('ADMIN/admin');
})->name('ad');
Route::get('/airports', function () {
    return view('AIRPORTS/airports');
})->name('air');
Route::get('/busstation', function () {
    return view('BUSSTATION/busstation');
})->name('bus');
Route::get('/college', function () {
    return view('COLLEGE/college');
})->name('col');
Route::get('/dams', function () {
    return view('DAMS/dams');
})->name('dam');
Route::get('/electronics', function () {
    return view('ELECTRONICS/electronics');
})->name('elec');
Route::get('/employees', function () {
    return view('EMPLOYEES/employee');
})->name('emp');
Route::get('/human', function () {
    return view('HUMAN/human');
})->name('hu');
Route::get('/loss', function () {
    return view('LOSS/loss');
})->name('los');
Route::get('/profit', function () {
    return view('PROFIT/profit');
})->name('prof');
Route::get('/sales', function () {
    return view('SALES/sales');
})->name('sale');
Route::get('/school', function () {
    return view('SCHOOL/school');
})->name('sch');
Route::get('/students', function () {
    return view('STUDENTS/students');
})->name('stud');
Route::get('/university', function () {
    return view('UNIVERSITY/university');
})->name('uni');
Route::get('/workers', function () {
    return view('WORKERS/workers');
})->name('wor');

Route::get('/farah', function () {
    return view('test');
});

/*Route::get('/sales', [profit::class,'sale']);
Route::get('/profit',[profit::class,'index']);
Route::get('/loss', [loss::class,'index']);
Route::get('/employees', [airportcontroller::class,'index']);
Route::get('/admin',[customcontroller::class,'index']);

Route::get('/school', [profit::class,'schools']); 

Route::get('/college', [college::class,'index']);

Route::get('/university', [profit::class,'uni']); 

Route::get('/dams', [dams::class,'index']);

Route::get('/students', [profit::class,'student']); 
Route::get('/workers', [profit::class,'worker']); 
Route::get('/human', [human::class,'index']);
Route::get('/electronics', [electronics::class,'index']);
Route::get('/busstation', [busstationcontroller::class,'index']);
Route::get('/airports', [airportcontroller::class,'index']);
Route ::get('/card',[cardscontroller::class,'test']);
Route ::get('/ifcard',[ifcontroller::class,'test']);
Route ::get('/cosmatic',[cosmaticscontroller::class,'index']);
Route ::get('/jewellery',[jewellerycontroller::class,'index']);
Route ::get('/transport',[transportcontroller::class,'index']);
Route::get('/index', function () {
    return view('Index/index');
});
Route::post('/cosmatic',[cosmaticscontroller::class,'store'])->name('order.store');*/