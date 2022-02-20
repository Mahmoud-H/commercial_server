<?php

namespace App\Http\Requests;

use App\Models\FeeClass;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyFeeClassRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('fee_class_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:fee_classes,id',
        ];
    }
}
