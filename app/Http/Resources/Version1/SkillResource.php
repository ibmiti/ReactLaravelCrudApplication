<?php

namespace App\Http\Resources\Version1;

use Illuminate\Http\Resources\Json\JsonResource;

class SkillResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'skillName' => $this->name,
            'url' => $this->slug
        ];
        // This returns full object, including created_at, updated_at
        // return parent::toArray($request);
    }
}
