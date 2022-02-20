<?php

namespace App\Http\Requests;

use App\Models\CrecRegRequest;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCrecRegRequestRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('crec_reg_request_edit');
    }

    public function rules()
    {
        return [
            'crec_code' => [
                'string',
                'max:15',
                'nullable',
            ],
            'crec_appl_no' => [
                'string',
                'max:15',
                'nullable',
            ],
            'crec_appl_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'crec_register_no' => [
                'string',
                'max:15',
                'required',
                'unique:crec_reg_requests,crec_register_no,' . request()->route('crec_reg_request')->id,
            ],
            'crec_comp_name_a' => [
                'string',
                'max:100',
                'required',
            ],
            'crec_comp_name_l' => [
                'string',
                'max:100',
                'nullable',
            ],
            'crec_comp_name_h' => [
                'string',
                'max:100',
                'nullable',
            ],
            'crec_start_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'crec_brand_name' => [
                'string',
                'max:250',
                'nullable',
            ],
            'country_id' => [
                'required',
                'integer',
            ],
            'city_id' => [
                'required',
                'integer',
            ],
            'crec_address_a' => [
                'string',
                'max:100',
                'nullable',
            ],
            'crec_address_l' => [
                'string',
                'max:100',
                'nullable',
            ],
            'crec_street' => [
                'string',
                'max:100',
                'nullable',
            ],
            'crec_bldg_no' => [
                'string',
                'max:10',
                'nullable',
            ],
            'crec_tel_no' => [
                'string',
                'max:13',
                'nullable',
            ],
            'crec_fax_no' => [
                'string',
                'max:13',
                'nullable',
            ],
            'crec_mobile_no' => [
                'string',
                'max:13',
                'nullable',
            ],
            'crec_po_box' => [
                'string',
                'max:13',
                'nullable',
            ],
            'crec_email' => [
                'string',
                'max:250',
                'nullable',
            ],
            'crec_website' => [
                'string',
                'max:250',
                'nullable',
            ],
            'crec_applicant_id_no' => [
                'string',
                'max:10',
                'required',
            ],
            'crec_applicant_name' => [
                'string',
                'max:100',
                'nullable',
            ],
            'crec_end_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'crec_notes' => [
                'string',
                'max:250',
                'nullable',
            ],
            'crec_work_name' => [
                'string',
                'max:250',
                'nullable',
            ],
        ];
    }
}
