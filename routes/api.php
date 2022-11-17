<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Version1\SkillController;

Route::group(['prefix'=> 'version1'], function(){
    Route::apiResource('skills', SkillController::class);
});
