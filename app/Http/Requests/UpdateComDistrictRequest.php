<?php

namespace App\Http\Requests;

use App\Models\ComDistrict;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateComDistrictRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('com_district_edit');
    }

    public function rules()
    {
        return [
            'city_id' => [
                'required',
                'integer',
            ],
            'district_name_a' => [
                'string',
                'max:150',
                'required',
            ],
            'district_name_l' => [
                'string',
                'max:150',
                'nullable',
            ],
        ];
    }
}
