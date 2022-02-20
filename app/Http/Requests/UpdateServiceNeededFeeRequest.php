<?php

namespace App\Http\Requests;

use App\Models\ServiceNeededFee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateServiceNeededFeeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('service_needed_fee_edit');
    }

    public function rules()
    {
        return [
            'fee_type_id' => [
                'required',
                'integer',
            ],
            'service_id' => [
                'required',
                'integer',
            ],
            'is_required' => [
                'required',
            ],
            'notes' => [
                'string',
                'max:50',
                'nullable',
            ],
        ];
    }
}
