<?php

use Illuminate\Support\Facades\Route;
use AdminKit\Polls\UI\API\Controllers\PollController;

Route::get('/polls', [PollController::class, 'index']);
Route::get('/polls/{id}', [PollController::class, 'show']);
