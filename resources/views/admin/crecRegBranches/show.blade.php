@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.crecRegBranch.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                                     <a class="btn btn-default" href="/admin/crec-reg-requests/{{$crecRegBranch->crec_reg_request_id}}/edit">

<!--                <a class="btn btn-default" href="{{ route('admin.crec-reg-branches.index') }}">-->
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.id') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.crec_reg_request') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->crec_reg_request->crec_comp_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_no') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->branch_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_brand_name') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->branch_brand_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_open_date') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->branch_open_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.country') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->country->country_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.governorate') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->governorate->governorate_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.city') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->city->city_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_address_a') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->branch_address_a }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_address_l') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->branch_address_l }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_street') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->branch_street }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_bldg_no') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->branch_bldg_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_tel_no') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->branch_tel_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_fax_no') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->branch_fax_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_mobile_no') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->branch_mobile_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_po_box') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->branch_po_box }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_email') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->branch_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_website') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->branch_website }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_contact_person') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->branch_contact_person }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_work_class') }}
                        </th>
                        <td>
                            {{ $crecRegBranch->branch_work_class->work_class_desc_a ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
<!--                <a class="btn btn-default" href="{{ route('admin.crec-reg-branches.index') }}">-->
            <a class="btn btn-default" href="/admin/crec-reg-requests/{{$crecRegBranch->crec_reg_request_id}}/edit">

                    
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection