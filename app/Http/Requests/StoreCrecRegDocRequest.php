<?php

namespace App\Http\Requests;

use App\Models\CrecRegDoc;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCrecRegDocRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('crec_reg_doc_create');
    }

    public function rules()
    {
        return [
            'crec_reg_request_id' => [
                'required',
                'integer',
            ],
            'neededdoc_id' => [
                'required',
                'integer',
            ],
            'docs_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'docs_ref_code' => [
                'string',
                'max:15',
                'nullable',
            ],
            'doc_file' => [
//                'string',
//                'max:250',
                'nullable',
            ],
        ];
    }
}
