<?php

namespace App\Http\Requests;

use App\Models\ComCity;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateComCityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('com_city_edit');
    }

    public function rules()
    {
        return [
            'governorate_id' => [
                'required',
                'integer',
            ],
            'city_name_a' => [
                'string',
                'max:150',
                'required',
            ],
            'city_name_l' => [
                'string',
                'max:150',
                'nullable',
            ],
            'city_name_h' => [
                'string',
                'max:150',
                'nullable',
            ],
        ];
    }
}
