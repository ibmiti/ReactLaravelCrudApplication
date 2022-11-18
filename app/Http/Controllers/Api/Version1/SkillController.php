<?php

namespace App\Http\Controllers\Api\Version1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Resources\Version1\SkillResource;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index(){
        return SKillResource::collection(Skill::paginate(2));
    }

    public function show(Skill $skill){
        // returns json-like response
        return new SkillResource($skill);
    }

    public function store(StoreSkillRequest $request){
        Skill::create($request->validated());
        return response()->json("Skill Created");
    }

    public function update(StoreSkillRequest $request, Skill $skill){
        $skill->update($request->validated());
        return response()->json("Skill Updated");
    }

    public function destroy(Skill $skill){
        $skill->delete();
        return response()->json("Skill Deleted");
    }
}
