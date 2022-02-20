<?php

namespace App\Http\Requests;

use App\Models\ComNeededDoc;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateComNeededDocRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('com_needed_doc_edit');
    }

    public function rules()
    {
        return [
            'needed_doc_name_a' => [
                'string',
                'max:100',
                'required',
            ],
            'needed_doc_name_l' => [
                'string',
                'max:100',
                'nullable',
            ],
        ];
    }
}
