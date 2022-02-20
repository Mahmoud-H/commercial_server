<?php

namespace App\Http\Requests;

use App\Models\ComDistrict;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyComDistrictRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('com_district_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:com_districts,id',
        ];
    }
}
