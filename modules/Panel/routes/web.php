<?php

use Illuminate\Support\Facades\Route;
use Modules\Panel\Http\Controllers\PanelController;


Route::group(['middleware' => 'auth'], function () {
    Route::get('panel', \Modules\Panel\Livewire\Index::class)->name('panel');
});
