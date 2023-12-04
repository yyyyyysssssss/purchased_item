<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;

// コメント部分は省略

Route::get('/', [ItemsController::class, 'index']);
Route::resource('items', ItemsController::class);