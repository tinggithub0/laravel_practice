<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/member', [MemberController::class, 'index']);
Route::post('/member', [MemberController::class, 'store']);
Route::get('/member/create', [MemberController::class, 'create']);
Route::put('/member/{member}', [MemberController::class, 'update']);
Route::get('/member/{member}/edit', [MemberController::class, 'edit']);
Route::delete('/member/{member}', [MemberController::class, 'delete']);

