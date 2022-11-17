<?php

namespace App\Http\Controllers\Api\Version1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index(){
        return response()->json("Skill Index");
    }

    public function store(StoreSkillRequest $request){
    Skill::create($request->validated());
    }
}
