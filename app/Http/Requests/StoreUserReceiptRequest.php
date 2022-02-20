<?php

namespace App\Http\Requests;

use App\Models\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUserReceiptRequest extends FormRequest
{
    public function authorize()
    {
        return true;//Gate::allows('user_create');
    }

    public function rules()
    {
        return [
            'receipt_number' => [
                'string',
                'required',
            ],
            'receipt_date' => [
                'date_format:' . config('panel.date_format'),
                'required',
            ],
        ];
    }
}
