<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSkillRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        /* These are the validation rules
            = this file and method will check the associated model for the following:
                    - the name field entry, is required, and must be min of 3 - 28 chars
                    - the slug entry must be unique when checking against, the skills table, and slug column.
        */
        return [
            'name' => ['required', 'min:3', 'max:28'],
            'slug' => ['required', 'unique:skills,slug,' . $this->skill->id]
        ];
    }
}
