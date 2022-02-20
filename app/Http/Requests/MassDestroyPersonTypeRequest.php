<?php

namespace App\Http\Requests;

use App\Models\PersonType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPersonTypeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('person_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:person_types,id',
        ];
    }
}
