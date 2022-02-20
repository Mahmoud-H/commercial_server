<?php

namespace App\Http\Requests;

use App\Models\CrecRegRequest;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCrecRegRequestRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('crec_reg_request_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:crec_reg_requests,id',
        ];
    }
}
