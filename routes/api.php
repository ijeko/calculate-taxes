<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Delivery\DeliveryCostController;

Route::get('delivery/cost', DeliveryCostController::class)->name('delivery.cost');
