<?php

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

Route::get('/member/show', [App\Http\Controllers\MemberController::class, 'member_show'])->name('member.show');
Route::get('/member/create', [App\Http\Controllers\MemberController::class, 'show'])->name('member.create');
Route::post('/member/registered', [App\Http\Controllers\MemberController::class, 'store'])->name('member.post');

Route::get('/item/show',[App\Http\Controllers\ItemController::class, 'item_show'])->name('item.show');
Route::get('/item/create',[App\Http\Controllers\ItemController::class, 'show'])->name('item.create');
Route::post('/item/registered',[App\Http\Controllers\ItemController::class, 'store'])->name('item.post');

Route::get('/employee/show', [App\Http\Controllers\EmployeeController::class, 'employee_show'])->name('employee.show');
Route::get('/employee/create', [App\Http\Controllers\EmployeeController::class, 'show'])->name('employee.create');
Route::post('/employee/registered', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.post');

Route::get('/category/show', [App\Http\Controllers\CategoryController::class, 'category_show'])->name('category.show');
Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.create');
Route::post('/category/registered', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.post');




Route::get('/test', [App\Http\Controllers\ItemController::class, 'test'])->name('test.show');
