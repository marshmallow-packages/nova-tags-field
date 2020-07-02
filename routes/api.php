<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \Marshmallow\TagsField\Http\Controllers\TagsFieldController::class.'@index');
