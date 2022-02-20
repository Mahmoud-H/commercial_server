<?php

namespace App\Http\Requests;

use App\Models\ComGovernorate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyComGovernorateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('com_governorate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:com_governorates,id',
        ];
    }
}
