<?php

namespace App\Http\Requests;

use App\Models\CrecRegBranch;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCrecRegBranchRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('crec_reg_branch_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:crec_reg_branches,id',
        ];
    }
}
