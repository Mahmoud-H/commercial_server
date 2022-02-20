<?php

namespace App\Http\Requests;

use App\Models\CrecRegBranch;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCrecRegBranchRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('crec_reg_branch_edit');
    }

    public function rules()
    {
        return [
            'crec_reg_request_id' => [
                'required',
                'integer',
            ],
            'branch_no' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'branch_brand_name' => [
                'string',
                'max:250',
                'nullable',
            ],
            'branch_open_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'branch_address_a' => [
                'string',
                'max:100',
                'nullable',
            ],
            'branch_address_l' => [
                'string',
                'max:100',
                'nullable',
            ],
            'branch_street' => [
                'string',
                'max:30',
                'nullable',
            ],
            'branch_bldg_no' => [
                'string',
                'max:10',
                'nullable',
            ],
            'branch_tel_no' => [
                'string',
                'max:13',
                'nullable',
            ],
            'branch_fax_no' => [
                'string',
                'max:13',
                'nullable',
            ],
            'branch_mobile_no' => [
                'string',
                'max:13',
                'nullable',
            ],
            'branch_po_box' => [
                'string',
                'max:13',
                'nullable',
            ],
            'branch_email' => [
                'string',
                'max:250',
                'nullable',
            ],
            'branch_website' => [
                'string',
                'max:250',
                'nullable',
            ],
            'branch_contact_person' => [
                'string',
                'max:250',
                'nullable',
            ],
        ];
    }
}
