<?php

namespace App\Http\Requests;

use App\Models\ServiceNeededFee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyServiceNeededFeeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('service_needed_fee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:service_needed_fees,id',
        ];
    }
}
