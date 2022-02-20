@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.crecRegRequest.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.crec-reg-requests.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.id') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_code') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_appl_no') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_appl_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_appl_date') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_appl_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_register_no') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_register_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_comp_name_a') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_comp_name_a }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_comp_name_l') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_comp_name_l }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_comp_name_h') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_comp_name_h }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_start_date') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_brand_name') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_brand_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.country') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->country->country_tel_prefix ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.governorate') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->governorate->governorate_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.city') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->city->city_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_address_a') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_address_a }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_address_l') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_address_l }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_street') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_street }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_bldg_no') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_bldg_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_tel_no') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_tel_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_fax_no') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_fax_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_mobile_no') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_mobile_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_po_box') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_po_box }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_email') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_website') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_website }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_applicant_id_no') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_applicant_id_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_applicant_name') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_applicant_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_end_date') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_end_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_notes') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_notes }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_work_class') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_work_class->work_class_desc_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_work_name') }}
                        </th>
                        <td>
                            {{ $crecRegRequest->crec_work_name }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.crec-reg-requests.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection