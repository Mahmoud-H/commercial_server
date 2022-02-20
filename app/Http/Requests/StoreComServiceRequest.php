<?php

namespace App\Http\Requests;

use App\Models\ComService;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreComServiceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('com_service_create');
    }

    public function rules()
    {
        return [
            'service_name_a' => [
                'string',
                'max:40',
                'required',
                'unique:com_services',
            ],
            'service_name_l' => [
                'string',
                'max:40',
                'nullable',
            ],
        ];
    }
}
