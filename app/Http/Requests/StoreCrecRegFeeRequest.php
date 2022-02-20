<?php

namespace App\Http\Requests;

use App\Models\CrecRegFee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCrecRegFeeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('crec_reg_fee_create');
    }

    public function rules()
    {
        return [
            'crec_reg_request_id' => [
                'required',
                'integer',
            ],
            'fee_type_id' => [
                'required',
                'integer',
            ],
            'fee_type_amt' => [
                'numeric',
                'required',
            ],
            'fee_qty' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
