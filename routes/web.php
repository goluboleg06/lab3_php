<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnterpriseController;

Route::resource('enterprises', EnterpriseController::class);
