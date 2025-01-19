<?php

use Illuminate\Support\Facades\Route;

/**
 * Wildcard route for fallback
 */
Route::view('/{any}', 'welcome')->where('any', '.*');
