<?php

namespace App\Http\Requests;

use App\Models\FeeType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFeeTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('fee_type_edit');
    }

    public function rules()
    {
        return [
            'fee_type_name_a' => [
                'string',
                'max:350',
                'required',
                'unique:fee_types,fee_type_name_a,' . request()->route('fee_type')->id,
            ],
            'fee_type_name_l' => [
                'string',
                'max:350',
                'nullable',
            ],
            'fee_class_id' => [
                'required',
                'integer',
            ],
            'currency_id' => [
                'required',
                'integer',
            ],
            'fee_type_amt' => [
                'numeric',
            ],
        ];
    }
}
