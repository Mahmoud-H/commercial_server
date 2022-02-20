<?php

namespace App\Http\Requests;

use App\Models\ComAccount;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateComAccountRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('com_account_edit');
    }

    public function rules()
    {
        return [
            'account_code' => [
                'string',
                'max:20',
                'required',
                'unique:com_accounts,account_code,' . request()->route('com_account')->id,
            ],
            'account_name' => [
                'string',
                'max:200',
                'required',
            ],
            'account_address_a' => [
                'string',
                'max:200',
                'nullable',
            ],
            'note' => [
                'string',
                'max:100',
                'nullable',
            ],
        ];
    }
}
