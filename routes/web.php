<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

Route::get('/', [MemberController::class,'index' ]);
Route::post('/member/daftar',[MemberController::class, 'store']);