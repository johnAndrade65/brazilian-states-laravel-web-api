<?php

use App\Http\Controllers\StatesOfBrazilController;

Route::prefix('v1')->group(function () {
    Route::get('states', [StatesOfBrazilController::class, 'getAllBrazilianStates']);

    Route::get('states/{uf}', [StatesOfBrazilController::class, 'getBrazilianStateByUf']);
});