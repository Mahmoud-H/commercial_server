<?php

namespace App\Http\Requests;

use App\Models\PersonType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePersonTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('person_type_edit');
    }

    public function rules()
    {
        return [
            'person_type_name_a' => [
                'string',
                'max:40',
                'required',
                'unique:person_types,person_type_name_a,' . request()->route('person_type')->id,
            ],
            'person_type_name_l' => [
                'string',
                'max:40',
                'nullable',
            ],
        ];
    }
}
