@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.crecRegBranch.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.crec-reg-branches.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="crec_reg_request_id">{{ trans('cruds.crecRegBranch.fields.crec_reg_request') }}</label>
                <select class="form-control select2 {{ $errors->has('crec_reg_request') ? 'is-invalid' : '' }}" name="crec_reg_request_id" id="crec_reg_request_id" required>
                    @foreach($crec_reg_requests as $id => $entry)
                        <option value="{{ $id }}" {{ old('crec_reg_request_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('crec_reg_request'))
                    <span class="text-danger">{{ $errors->first('crec_reg_request') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.crec_reg_request_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch_no">{{ trans('cruds.crecRegBranch.fields.branch_no') }}</label>
                <input class="form-control {{ $errors->has('branch_no') ? 'is-invalid' : '' }}" type="number" name="branch_no" id="branch_no" value="{{ old('branch_no', '') }}" step="1">
                @if($errors->has('branch_no'))
                    <span class="text-danger">{{ $errors->first('branch_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch_brand_name">{{ trans('cruds.crecRegBranch.fields.branch_brand_name') }}</label>
                <input class="form-control {{ $errors->has('branch_brand_name') ? 'is-invalid' : '' }}" type="text" name="branch_brand_name" id="branch_brand_name" value="{{ old('branch_brand_name', '') }}">
                @if($errors->has('branch_brand_name'))
                    <span class="text-danger">{{ $errors->first('branch_brand_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_brand_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch_open_date">{{ trans('cruds.crecRegBranch.fields.branch_open_date') }}</label>
                <input class="form-control date {{ $errors->has('branch_open_date') ? 'is-invalid' : '' }}" type="text" name="branch_open_date" id="branch_open_date" value="{{ old('branch_open_date') }}">
                @if($errors->has('branch_open_date'))
                    <span class="text-danger">{{ $errors->first('branch_open_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_open_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country_id">{{ trans('cruds.crecRegBranch.fields.country') }}</label>
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id">
                    @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="governorate_id">{{ trans('cruds.crecRegBranch.fields.governorate') }}</label>
                <select class="form-control select2 {{ $errors->has('governorate') ? 'is-invalid' : '' }}" name="governorate_id" id="governorate_id">
                    @foreach($governorates as $id => $entry)
                        <option value="{{ $id }}" {{ old('governorate_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('governorate'))
                    <span class="text-danger">{{ $errors->first('governorate') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.governorate_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="city_id">{{ trans('cruds.crecRegBranch.fields.city') }}</label>
                <select class="form-control select2 {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id" id="city_id">
                    @foreach($cities as $id => $entry)
                        <option value="{{ $id }}" {{ old('city_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch_address_a">{{ trans('cruds.crecRegBranch.fields.branch_address_a') }}</label>
                <input class="form-control {{ $errors->has('branch_address_a') ? 'is-invalid' : '' }}" type="text" name="branch_address_a" id="branch_address_a" value="{{ old('branch_address_a', '') }}">
                @if($errors->has('branch_address_a'))
                    <span class="text-danger">{{ $errors->first('branch_address_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_address_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch_address_l">{{ trans('cruds.crecRegBranch.fields.branch_address_l') }}</label>
                <input class="form-control {{ $errors->has('branch_address_l') ? 'is-invalid' : '' }}" type="text" name="branch_address_l" id="branch_address_l" value="{{ old('branch_address_l', '') }}">
                @if($errors->has('branch_address_l'))
                    <span class="text-danger">{{ $errors->first('branch_address_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_address_l_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch_street">{{ trans('cruds.crecRegBranch.fields.branch_street') }}</label>
                <input class="form-control {{ $errors->has('branch_street') ? 'is-invalid' : '' }}" type="text" name="branch_street" id="branch_street" value="{{ old('branch_street', '') }}">
                @if($errors->has('branch_street'))
                    <span class="text-danger">{{ $errors->first('branch_street') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_street_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch_bldg_no">{{ trans('cruds.crecRegBranch.fields.branch_bldg_no') }}</label>
                <input class="form-control {{ $errors->has('branch_bldg_no') ? 'is-invalid' : '' }}" type="text" name="branch_bldg_no" id="branch_bldg_no" value="{{ old('branch_bldg_no', '') }}">
                @if($errors->has('branch_bldg_no'))
                    <span class="text-danger">{{ $errors->first('branch_bldg_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_bldg_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch_tel_no">{{ trans('cruds.crecRegBranch.fields.branch_tel_no') }}</label>
                <input class="form-control {{ $errors->has('branch_tel_no') ? 'is-invalid' : '' }}" type="text" name="branch_tel_no" id="branch_tel_no" value="{{ old('branch_tel_no', '') }}">
                @if($errors->has('branch_tel_no'))
                    <span class="text-danger">{{ $errors->first('branch_tel_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_tel_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch_fax_no">{{ trans('cruds.crecRegBranch.fields.branch_fax_no') }}</label>
                <input class="form-control {{ $errors->has('branch_fax_no') ? 'is-invalid' : '' }}" type="text" name="branch_fax_no" id="branch_fax_no" value="{{ old('branch_fax_no', '') }}">
                @if($errors->has('branch_fax_no'))
                    <span class="text-danger">{{ $errors->first('branch_fax_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_fax_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch_mobile_no">{{ trans('cruds.crecRegBranch.fields.branch_mobile_no') }}</label>
                <input class="form-control {{ $errors->has('branch_mobile_no') ? 'is-invalid' : '' }}" type="text" name="branch_mobile_no" id="branch_mobile_no" value="{{ old('branch_mobile_no', '') }}">
                @if($errors->has('branch_mobile_no'))
                    <span class="text-danger">{{ $errors->first('branch_mobile_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_mobile_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch_po_box">{{ trans('cruds.crecRegBranch.fields.branch_po_box') }}</label>
                <input class="form-control {{ $errors->has('branch_po_box') ? 'is-invalid' : '' }}" type="text" name="branch_po_box" id="branch_po_box" value="{{ old('branch_po_box', '') }}">
                @if($errors->has('branch_po_box'))
                    <span class="text-danger">{{ $errors->first('branch_po_box') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_po_box_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch_email">{{ trans('cruds.crecRegBranch.fields.branch_email') }}</label>
                <input class="form-control {{ $errors->has('branch_email') ? 'is-invalid' : '' }}" type="text" name="branch_email" id="branch_email" value="{{ old('branch_email', '') }}">
                @if($errors->has('branch_email'))
                    <span class="text-danger">{{ $errors->first('branch_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch_website">{{ trans('cruds.crecRegBranch.fields.branch_website') }}</label>
                <input class="form-control {{ $errors->has('branch_website') ? 'is-invalid' : '' }}" type="text" name="branch_website" id="branch_website" value="{{ old('branch_website', '') }}">
                @if($errors->has('branch_website'))
                    <span class="text-danger">{{ $errors->first('branch_website') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_website_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch_contact_person">{{ trans('cruds.crecRegBranch.fields.branch_contact_person') }}</label>
                <input class="form-control {{ $errors->has('branch_contact_person') ? 'is-invalid' : '' }}" type="text" name="branch_contact_person" id="branch_contact_person" value="{{ old('branch_contact_person', '') }}">
                @if($errors->has('branch_contact_person'))
                    <span class="text-danger">{{ $errors->first('branch_contact_person') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_contact_person_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="branch_work_class_id">{{ trans('cruds.crecRegBranch.fields.branch_work_class') }}</label>
                <select class="form-control select2 {{ $errors->has('branch_work_class') ? 'is-invalid' : '' }}" name="branch_work_class_id" id="branch_work_class_id">
                    @foreach($branch_work_classes as $id => $entry)
                        <option value="{{ $id }}" {{ old('branch_work_class_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('branch_work_class'))
                    <span class="text-danger">{{ $errors->first('branch_work_class') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_work_class_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection