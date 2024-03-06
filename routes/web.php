<?php

use App\Http\Controllers\PaginationManager;
use App\Jobs\SendTestEmails;
use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

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

Route::get("/users", function () {
    $limit = 25;
    \App\Jobs\LaunchEmailJob::dispatch($limit);
    return view("welcome");
});
Route::get("/", fn() => view("welcome"));
