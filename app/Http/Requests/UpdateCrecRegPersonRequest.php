<?php

namespace App\Http\Requests;

use App\Models\CrecRegPerson;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCrecRegPersonRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('crec_reg_person_edit');
    }

    public function rules()
    {
        return [
            'crec_reg_request_id' => [
                'required',
                'integer',
            ],
            'person_id_no' => [
                'string',
                'max:10',
                'required',
            ],
            'person_type' => [
                'string',
                'max:10',
                'nullable',
            ],
            'person_name_a' => [
                'string',
                'max:100',
                'required',
            ],
            'person_name_l' => [
                'string',
                'max:100',
                'nullable',
            ],
            'person_birth_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'person_birth_place' => [
                'string',
                'max:250',
                'nullable',
            ],
            'person_gender' => [
                'string',
                'max:1',
                'nullable',
            ],
            'person_address_a' => [
                'string',
                'max:100',
                'nullable',
            ],
            'person_address_l' => [
                'string',
                'max:100',
                'nullable',
            ],
            'person_street' => [
                'string',
                'max:30',
                'nullable',
            ],
            'person_bldg_no' => [
                'string',
                'max:10',
                'nullable',
            ],
            'person_tel_no' => [
                'string',
                'max:13',
                'nullable',
            ],
            'person_fax_no' => [
                'string',
                'max:13',
                'nullable',
            ],
            'person_mobile_no' => [
                'string',
                'max:13',
                'nullable',
            ],
            'person_po_box' => [
                'string',
                'max:13',
                'nullable',
            ],
            'person_email' => [
                'string',
                'max:250',
                'nullable',
            ],
            'person_notes' => [
                'string',
                'max:250',
                'nullable',
            ],
            'deleg_address_a' => [
                'string',
                'max:100',
                'nullable',
            ],
            'deleg_address_l' => [
                'string',
                'max:100',
                'nullable',
            ],
            'deleg_street' => [
                'string',
                'max:30',
                'nullable',
            ],
            'deleg_bldg_no' => [
                'string',
                'max:10',
                'nullable',
            ],
            'deleg_tel_no' => [
                'string',
                'max:13',
                'nullable',
            ],
            'deleg_fax_no' => [
                'string',
                'max:13',
                'nullable',
            ],
            'deleg_mobile_no' => [
                'string',
                'max:13',
                'nullable',
            ],
            'deleg_po_box' => [
                'string',
                'max:13',
                'nullable',
            ],
            'deleg_email' => [
                'string',
                'max:250',
                'nullable',
            ],
            'deleg_website' => [
                'string',
                'max:250',
                'nullable',
            ],
        ];
    }
}
