@extends('layouts.admin1')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.crecRegRequest.title') }}
    </div>

      <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.front.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
    
    
    
    
    
    
    
    {{--<div class="card-body">
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
    </div>--}}
    
    
    
    
    <div class="card">
    <div class="card-header">
        {{ trans('cruds.crecRegRequest.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CrecRegRequest">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_appl_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_appl_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_register_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_comp_name_a') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_comp_name_l') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_comp_name_h') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_brand_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.governorate') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_address_a') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_address_l') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_street') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_bldg_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_tel_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_fax_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_mobile_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_po_box') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_website') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_applicant_id_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_applicant_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_end_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_notes') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_work_class') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegRequest.fields.crec_work_name') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($crecRegRequests as $key => $crecRegRequest)
                        <tr data-entry-id="{{ $crecRegRequest->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $crecRegRequest->id ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_code ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_appl_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_appl_date ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_register_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_comp_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_comp_name_l ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_comp_name_h ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_start_date ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_brand_name ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->country->country_tel_prefix ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->governorate->governorate_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->city->city_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_address_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_address_l ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_street ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_bldg_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_tel_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_fax_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_mobile_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_po_box ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_email ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_website ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_applicant_id_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_applicant_name ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_end_date ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_notes ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_work_class->work_class_desc_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegRequest->crec_work_name ?? '' }}
                            </td>
                            <td>
                                @can('crec_reg_request_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.crec-reg-requests.show', $crecRegRequest->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('crec_reg_request_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.crec-reg-requests.edit', $crecRegRequest->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('crec_reg_request_delete')
                                    <form action="{{ route('admin.crec-reg-requests.destroy', $crecRegRequest->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="card">
    <div class="card-header">
        {{ trans('cruds.crecRegPerson.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CrecRegPerson">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.crec_reg_request') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_id_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_name_a') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_name_l') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_birth_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_birth_place') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_gender') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_nationality') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.governorate') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_address_a') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_address_l') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_street') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_bldg_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_tel_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_fax_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_mobile_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_po_box') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_notes') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_address_a') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_address_l') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_street') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_bldg_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_tel_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_fax_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_mobile_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_po_box') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.deleg_website') }}
                        </th>
<!--
                        <th>
                            &nbsp;
                        </th>
-->
                    </tr>
                </thead>
                <tbody>
                    @foreach($crecRegPeoples as $key => $crecRegPerson)
                        <tr data-entry-id="{{ $crecRegPerson->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $crecRegPerson->id ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->crec_reg_request->crec_comp_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_id_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_type ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_name_l ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_birth_date ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_birth_place ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_gender ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_nationality->nationality_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->country->country_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->governorate->governorate_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->city->city_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_address_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_address_l ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_street ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_bldg_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_tel_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_fax_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_mobile_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_po_box ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_email ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->person_notes ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_address_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_address_l ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_street ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_bldg_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_tel_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_fax_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_mobile_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_po_box ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_email ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegPerson->deleg_website ?? '' }}
                            </td>
                            {{--<td>
                                @can('crec_reg_person_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.crec-reg-people.show', $crecRegPerson->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('crec_reg_person_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.crec-reg-people.edit', $crecRegPerson->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('crec_reg_person_delete')
                                    <form action="{{ route('admin.crec-reg-people.destroy', $crecRegPerson->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>--}}

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    
    
    
    
 <div class="card">
    <div class="card-header">
        {{ trans('cruds.crecRegBranch.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CrecRegBranch">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.crec_reg_request') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_brand_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_open_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.governorate') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_address_a') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_address_l') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_street') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_bldg_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_tel_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_fax_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_mobile_no') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_po_box') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_website') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_contact_person') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegBranch.fields.branch_work_class') }}
                        </th>
<!--
                        <th>
                            &nbsp;
                        </th>
-->
                    </tr>
                </thead>
                <tbody>
                    @foreach($crecRegBranches as $key => $crecRegBranch)
                        <tr data-entry-id="{{ $crecRegBranch->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $crecRegBranch->id ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->crec_reg_request->crec_comp_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_brand_name ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_open_date ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->country->country_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->governorate->governorate_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->city->city_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_address_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_address_l ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_street ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_bldg_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_tel_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_fax_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_mobile_no ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_po_box ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_email ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_website ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_contact_person ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegBranch->branch_work_class->work_class_desc_a ?? '' }}
                            </td>
                            {{--<td>
                                @can('crec_reg_branch_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.crec-reg-branches.show', $crecRegBranch->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('crec_reg_branch_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.crec-reg-branches.edit', $crecRegBranch->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('crec_reg_branch_delete')
                                    <form action="{{ route('admin.crec-reg-branches.destroy', $crecRegBranch->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>--}}

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
   
    
   <div class="card">
    <div class="card-header">
        {{ trans('cruds.crecRegDelegate.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CrecRegDelegate">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.crecRegDelegate.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegDelegate.fields.crec_reg_request') }}
                        </th>
<!--
                        <th>
                            &nbsp;
                        </th>
-->
                    </tr>
                </thead>
                <tbody>
                    @foreach($crecRegDelegates as $key => $crecRegDelegate)
                        <tr data-entry-id="{{ $crecRegDelegate->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $crecRegDelegate->id ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegDelegate->crec_reg_request->crec_comp_name_a ?? '' }}
                            </td>
                            {{--<td>
                                @can('crec_reg_delegate_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.crec-reg-delegates.show', $crecRegDelegate->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('crec_reg_delegate_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.crec-reg-delegates.edit', $crecRegDelegate->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('crec_reg_delegate_delete')
                                    <form action="{{ route('admin.crec-reg-delegates.destroy', $crecRegDelegate->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>--}}

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> 
    
    
   
    
    
  <div class="card">
    <div class="card-header">
        {{ trans('cruds.crecRegDoc.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CrecRegDoc">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.crec_reg_request') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.neededdoc') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.docs_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.docs_ref_code') }}
                        </th>
                        <th>
                            {{ trans('cruds.crecRegDoc.fields.doc_file') }}
                        </th>
<!--
                        <th>
                            &nbsp;
                        </th>
-->
                    </tr>
                </thead>
                <tbody>
                    @foreach($crecRegDocs as $key => $crecRegDoc)
                        <tr data-entry-id="{{ $crecRegDoc->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $crecRegDoc->id ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegDoc->crec_reg_request->crec_comp_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegDoc->neededdoc->needed_doc_name_a ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegDoc->docs_date ?? '' }}
                            </td>
                            <td>
                                {{ $crecRegDoc->docs_ref_code ?? '' }}
                            </td>
                            <td>
                  <a target="_blank" href="/uploads/{{$crecRegDoc->doc_file}}">عرض الملف</a>    
<!--                             {{ $crecRegDoc->doc_file ?? '' }}  -->
                            </td>
                            {{--<td>
                                @can('crec_reg_doc_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.crec-reg-docs.show', $crecRegDoc->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('crec_reg_doc_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.crec-reg-docs.edit', $crecRegDoc->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('crec_reg_doc_delete')
                                    <form action="{{ route('admin.crec-reg-docs.destroy', $crecRegDoc->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>--}}

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>  
    
    
    
    
    
   <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.front.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>   
    
    
    
    
</div>



@endsection