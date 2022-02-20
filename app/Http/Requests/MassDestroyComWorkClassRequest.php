<?php

namespace App\Http\Requests;

use App\Models\ComWorkClass;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyComWorkClassRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('com_work_class_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:com_work_classes,id',
        ];
    }
}
