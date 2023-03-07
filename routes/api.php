<?php

use App\Http\Controllers\API\Condominio\{
  CompanyController
};

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

  return response()->json([
    'success' => true,
  ]);
});


#Cadastros Base { Company }
Route::resource('/company', CompanyController::class);
#Cadastros Base { Company }