<?php

namespace App\Http\Requests;

use App\Models\CrecRegDelegate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCrecRegDelegateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('crec_reg_delegate_edit');
    }

    public function rules()
    {
        return [
            'crec_reg_request_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
