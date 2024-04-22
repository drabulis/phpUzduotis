<?php

use App\Http\Controllers\AuthorizationMultipleGuardsController;
use App\Http\Controllers\BasicFeatureTestController;
use App\Http\Controllers\BasicUnitTestController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CSRFProtectionController;
use App\Http\Controllers\CustomMiddlewareController;
use App\Http\Controllers\FormValidController;
use App\Http\Controllers\GetFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaravelPaginationController;
use App\Http\Controllers\LocalFileUploadController;
use App\Http\Controllers\MySQLCRUDController;
use App\Http\Controllers\PostFormController;
use App\Http\Controllers\RegistrationAuthorizationController;
use App\Http\Controllers\RemoteJSONParsingController;
use App\Http\Controllers\RemoteXMLParsingController;
use App\Http\Controllers\RequestValidationController;
use App\Http\Controllers\SendingEmailsMailJetController;
use App\Http\Controllers\ViteAssetCompilationController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Basic usage routes
Route::get('/GetForm', [GetFormController::class, 'index'])->name('GetForm');
    //Post Form routes
    Route::get('/PostForm', [PostFormController::class, 'index'])->name('PostForm.index');
    Route::post('/PostForm', [PostFormController::class, 'create'])->name('PostForm.create');
Route::get('/JSONParsing', [RemoteJSONParsingController::class, 'index'])->name('JSONParsing');
Route::get('/XMLParsing', [RemoteXMLParsingController::class, 'index'])->name('XMLParsing');
    //Local File Upload routes
    Route::get('/UploadFile', [LocalFileUploadController::class, 'index'])->name('UploadFile.index');
    Route::post('/UploadFile', [LocalFileUploadController::class, 'upload'])->name('UploadFile.upload');
    //Sending Emails routes
    Route::get('/SendingEmail', [SendingEmailsMailJetController::class, 'index'])->name('SendingEmail');
    Route::post('/SendingEmail', [SendingEmailsMailJetController::class, 'sendEmail'])->name('SendingEmail.sendEmail');
    //Post Form CSRF Protection routes
    Route::get('/CSRFProtection', [CSRFProtectionController::class, 'index'])->name('CSRFProtection');
    Route::post('/CSRFProtection', [CSRFProtectionController::class, 'create'])->name('CSRFProtection.create');
    //Post Form with validation routes
    Route::get('/FormValidation', [FormValidController::class, 'index'])->name('FormValidation');
    Route::post('/FormValidation', [FormValidController::class, 'create'])->name('FormValidation.create');
// Advanced usage routes
Route::get('/LaravelPagination', [LaravelPaginationController::class, 'index'])->name('LaravelPagination');
    //MySQL CRUD routes
    Route::get('/MySQLCRUD', [MySQLCRUDController::class, 'index'])->name('MySQLCRUD.index');
    Route::post('/MySQLCRUD', [MySQLCRUDController::class, 'create'])->name('MySQLCRUD.store');
    Route::get('/MySQLCRUD/{id}', [MySQLCRUDController::class, 'show'])->name('MySQLCRUD.show');
    Route::get('/MySQLCRUD/{id}/edit', [MySQLCRUDController::class, 'edit'])->name('MySQLCRUD.edit');
    Route::put('/MySQLCRUD/{id}', [MySQLCRUDController::class, 'update'])->name('MySQLCRUD.update');
    Route::delete('/MySQLCRUD/{id}', [MySQLCRUDController::class, 'destroy'])->name('MySQLCRUD.destroy');
    // Registration routes
    Route::get('/RegistrationAuthorization', [RegistrationAuthorizationController::class, 'index'])->name('RegistrationAuthorization');
    Route::post('/RegistrationAuthorization', [RegistrationAuthorizationController::class, 'register'])->name('RegistrationAuthorization.register');
    // Authorization routes
    Route::get('/AuthorizationMultipleGuards', [AuthorizationMultipleGuardsController::class, 'index'])->name('AuthorizationMultipleGuards');
    Route::post('/AuthorizationMultipleGuards', [AuthorizationMultipleGuardsController::class, 'login'])->name('AuthorizationMultipleGuards.login');
    Route::get('/AuthorizationMultipleGuards/logout', [AuthorizationMultipleGuardsController::class, 'logout'])->name('AuthorizationMultipleGuards.logout');
    // Custom Middleware
    Route::get('/CustomMiddleware', [CustomMiddlewareController::class, 'index'])->middleware('customMiddleware')->name('CustomMiddleware');
Route::get('/ViteAssetCompilation', [ViteAssetCompilationController::class, 'index'])->name('ViteAssetCompilation');
Route::get('/RequestValidation', [RequestValidationController::class, 'index'])->name('RequestValidation');
Route::post('/RequestValidation', [RequestValidationController::class,'register'])->name('RequestValidation.register');
Route::get('/BasicUnitTest', [BasicUnitTestController::class, 'index'])->name('BasicUnitTest');
Route::get('/BasicFeatureTest', [BasicFeatureTestController::class, 'index'])->name('BasicFeatureTest');
