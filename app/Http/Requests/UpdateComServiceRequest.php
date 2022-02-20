<?php

namespace App\Http\Requests;

use App\Models\ComService;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateComServiceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('com_service_edit');
    }

    public function rules()
    {
        return [
            'service_name_a' => [
                'string',
                'max:40',
                'required',
                'unique:com_services,service_name_a,' . request()->route('com_service')->id,
            ],
            'service_name_l' => [
                'string',
                'max:40',
                'nullable',
            ],
        ];
    }
}
