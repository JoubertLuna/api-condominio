<?php

use App\Http\Controllers\API\Condominio\{
  CompanyController,
  UserController
};

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

  return response()->json([
    'success' => true,
  ]);
});


#Cadastros Base { Company / User }
Route::resource('company', CompanyController::class);
Route::resource('user', UserController::class);
#Cadastros Base { Company / User }