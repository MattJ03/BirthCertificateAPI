<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BirthCertificateController;
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

Route::get('birth_certificates', [BirthCertificateController::class, 'index']);
Route::post('birth_certificates', [BirthCertificateController::class, 'store']);
Route::get('birth_certificates/{id}', [BirthCertificateController::class, 'show']);
Route::put('birth_certificates/{id}', [BirthCertificateController::class, 'update']);
