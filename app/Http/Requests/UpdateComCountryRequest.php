<?php

namespace App\Http\Requests;

use App\Models\ComCountry;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateComCountryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('com_country_edit');
    }

    public function rules()
    {
        return [
            'country_name_a' => [
                'string',
                'max:150',
                'required',
            ],
            'country_name_l' => [
                'string',
                'max:150',
                'nullable',
            ],
            'iso_3' => [
                'string',
                'max:3',
                'nullable',
            ],
            'iso_num' => [
                'string',
                'max:3',
                'nullable',
            ],
            'country_tel_prefix' => [
                'string',
                'max:5',
                'nullable',
            ],
            'nationality_a' => [
                'string',
                'max:40',
                'nullable',
            ],
            'nationality_l' => [
                'string',
                'nullable',
            ],
        ];
    }
}
