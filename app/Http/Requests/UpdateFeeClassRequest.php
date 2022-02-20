<?php

namespace App\Http\Requests;

use App\Models\FeeClass;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFeeClassRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('fee_class_edit');
    }

    public function rules()
    {
        return [
            'fee_class_name_a' => [
                'string',
                'max:40',
                'required',
            ],
            'fee_class_name_l' => [
                'string',
                'max:40',
                'nullable',
            ],
        ];
    }
}
