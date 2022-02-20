<?php

namespace App\Http\Requests;

use App\Models\ComGovernorate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreComGovernorateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('com_governorate_create');
    }

    public function rules()
    {
        return [
            'country_id' => [
                'required',
                'integer',
            ],
            'governorate_name_a' => [
                'string',
                'max:150',
                'required',
            ],
            'governorate_name_l' => [
                'string',
                'nullable',
            ],
        ];
    }
}
