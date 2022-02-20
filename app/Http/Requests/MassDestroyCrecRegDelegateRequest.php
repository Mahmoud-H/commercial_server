<?php

namespace App\Http\Requests;

use App\Models\CrecRegDelegate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCrecRegDelegateRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('crec_reg_delegate_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:crec_reg_delegates,id',
        ];
    }
}
