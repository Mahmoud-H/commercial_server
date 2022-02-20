<?php

namespace App\Http\Requests;

use App\Models\ComCity;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSettingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('crec_setting_create');
    }

    public function rules()
    {
        return [
//            'governorate_id' => [
//                'required',
//                'integer',
//            ],
            'prefix_folder' => [
                'string',
                'max:3',
                'required',
            ],
        ];
    }
}
