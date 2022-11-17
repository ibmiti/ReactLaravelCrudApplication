<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Version1\SkillController;

Route::group(['prefix'=> 'version1'], function(){
    Route::apiResource('skills', SkillController::class);
});

/*
    |Testing the above api Route|
(a) Navigate to Postman (or other)
(b) enter api Route into url bar
    (1) http://127.0.0.1:8000/api/version1/skills
        (a) The prefix above determines the word after api/...
        (b) The first arg within the apiResource(...,...) determines the destination
            (1) destination : '.../skills'
(c) Pay attention to the method youre searching with
    (1) GET/POST/PUT/Other...


*/
