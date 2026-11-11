<?php

use App\Http\Controllers\RecruitmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RecruitmentController::class, 'index'])->name('recruitment.index');
