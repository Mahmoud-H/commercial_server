<?php

namespace App\Http\Requests;

use App\Models\ComNeededDoc;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyComNeededDocRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('com_needed_doc_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:com_needed_docs,id',
        ];
    }
}
