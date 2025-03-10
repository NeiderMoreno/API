<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Controllers\DepartamentController;
use App\Controllers\EmployeeController;
use App\Controllers\AutsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('auth/register',[AuthController::class, 'create']);
Route::post('auth/login',[AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {

    Route::resource('departaments', DepartamentController::class);
    Route::resource('employees', EmployeeController::class);
    Route::get('employeesall',[EmployeeController::class, 'all']);
    Route::get('employeesbydepartament', [EmployeeController::class,
    'EmployeesByDepartament']);
    Route::get('auth/logout',[AuthController::class, 'logout']);

});


