<?php

use Illuminate\Support\Facades\Route;

Route::get('/health', fn () => response()->json(['result' => 'ok']));
