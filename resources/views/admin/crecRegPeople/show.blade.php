@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.crecRegPerson.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.crec-reg-people.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.id') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.crec_reg_request') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->crec_reg_request->crec_comp_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_id_no') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_id_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_name_a') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_name_a }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_name_l') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_name_l }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_birth_date') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_birth_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_birth_place') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_birth_place }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_gender') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_gender }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_nationality') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_nationality->nationality_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.country') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->country->country_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.governorate') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->governorate->governorate_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.city') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->city->city_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_address_a') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_address_a }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_address_l') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_address_l }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_street') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_street }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_bldg_no') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_bldg_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_tel_no') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_tel_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_fax_no') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_fax_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_mobile_no') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_mobile_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_po_box') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_po_box }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_email') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_notes') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_notes }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegPerson.fields.person_type') }}
                        </th>
                        <td>
                            {{ $crecRegPerson->person_type->person_type_name_a ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.crec-reg-people.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection