<?php

namespace App\Http\Requests;

use App\Models\ComCurrency;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateComCurrencyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('com_currency_edit');
    }

    public function rules()
    {
        return [
            'currency_symbol' => [
                'string',
                'max:3',
                'nullable',
            ],
            'currency_name_a' => [
                'string',
                'max:50',
                'required',
            ],
            'currency_name_l' => [
                'string',
                'max:50',
                'nullable',
            ],
        ];
    }
}
