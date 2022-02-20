<?php

namespace App\Http\Requests;

use App\Models\ComWorkClass;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreComWorkClassRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('com_work_class_create');
    }

    public function rules()
    {
        return [
            'work_class_desc_a' => [
                'string',
                'required',
            ],
            'work_class_desc_l' => [
                'string',
                'nullable',
            ],
        ];
    }
}
