<?php

use Hex0gen\LATaskManager\Http\Controllers\LAMinerManagerController;

Route::get('miner-manager', LAMinerManagerController::class.'@index');
Route::get('/miner-manager/tasks', LAMinerManagerController::class.'@tasks');
Route::get('/miner-manager/add-task', LAMinerManagerController::class.'@addTask');
