@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.crecRegPerson.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.crec-reg-people.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="crec_reg_request_id">{{ trans('cruds.crecRegPerson.fields.crec_reg_request') }}</label>
                <select class="form-control select2 {{ $errors->has('crec_reg_request') ? 'is-invalid' : '' }}" name="crec_reg_request_id" id="crec_reg_request_id" required>
                    @foreach($crec_reg_requests as $id => $entry)
                        <option value="{{ $id }}" {{ old('crec_reg_request_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('crec_reg_request'))
                    <span class="text-danger">{{ $errors->first('crec_reg_request') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.crec_reg_request_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="person_id_no">{{ trans('cruds.crecRegPerson.fields.person_id_no') }}</label>
                <input class="form-control {{ $errors->has('person_id_no') ? 'is-invalid' : '' }}" type="text" name="person_id_no" id="person_id_no" value="{{ old('person_id_no', '') }}" required>
                @if($errors->has('person_id_no'))
                    <span class="text-danger">{{ $errors->first('person_id_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_id_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="person_name_a">{{ trans('cruds.crecRegPerson.fields.person_name_a') }}</label>
                <input class="form-control {{ $errors->has('person_name_a') ? 'is-invalid' : '' }}" type="text" name="person_name_a" id="person_name_a" value="{{ old('person_name_a', '') }}" required>
                @if($errors->has('person_name_a'))
                    <span class="text-danger">{{ $errors->first('person_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_name_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="person_name_l">{{ trans('cruds.crecRegPerson.fields.person_name_l') }}</label>
                <input class="form-control {{ $errors->has('person_name_l') ? 'is-invalid' : '' }}" type="text" name="person_name_l" id="person_name_l" value="{{ old('person_name_l', '') }}">
                @if($errors->has('person_name_l'))
                    <span class="text-danger">{{ $errors->first('person_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_name_l_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="person_birth_date">{{ trans('cruds.crecRegPerson.fields.person_birth_date') }}</label>
                <input class="form-control date {{ $errors->has('person_birth_date') ? 'is-invalid' : '' }}" type="text" name="person_birth_date" id="person_birth_date" value="{{ old('person_birth_date') }}">
                @if($errors->has('person_birth_date'))
                    <span class="text-danger">{{ $errors->first('person_birth_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_birth_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="person_birth_place">{{ trans('cruds.crecRegPerson.fields.person_birth_place') }}</label>
                <input class="form-control {{ $errors->has('person_birth_place') ? 'is-invalid' : '' }}" type="text" name="person_birth_place" id="person_birth_place" value="{{ old('person_birth_place', '') }}">
                @if($errors->has('person_birth_place'))
                    <span class="text-danger">{{ $errors->first('person_birth_place') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_birth_place_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="person_gender">{{ trans('cruds.crecRegPerson.fields.person_gender') }}</label>
                <input class="form-control {{ $errors->has('person_gender') ? 'is-invalid' : '' }}" type="text" name="person_gender" id="person_gender" value="{{ old('person_gender', '') }}">
                @if($errors->has('person_gender'))
                    <span class="text-danger">{{ $errors->first('person_gender') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_gender_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="person_nationality_id">{{ trans('cruds.crecRegPerson.fields.person_nationality') }}</label>
                <select class="form-control select2 {{ $errors->has('person_nationality') ? 'is-invalid' : '' }}" name="person_nationality_id" id="person_nationality_id">
                    @foreach($person_nationalities as $id => $entry)
                        <option value="{{ $id }}" {{ old('person_nationality_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('person_nationality'))
                    <span class="text-danger">{{ $errors->first('person_nationality') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_nationality_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country_id">{{ trans('cruds.crecRegPerson.fields.country') }}</label>
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id">
                    @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="governorate_id">{{ trans('cruds.crecRegPerson.fields.governorate') }}</label>
                <select class="form-control select2 {{ $errors->has('governorate') ? 'is-invalid' : '' }}" name="governorate_id" id="governorate_id">
                    @foreach($governorates as $id => $entry)
                        <option value="{{ $id }}" {{ old('governorate_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('governorate'))
                    <span class="text-danger">{{ $errors->first('governorate') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.governorate_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="city_id">{{ trans('cruds.crecRegPerson.fields.city') }}</label>
                <select class="form-control select2 {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id" id="city_id">
                    @foreach($cities as $id => $entry)
                        <option value="{{ $id }}" {{ old('city_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="person_address_a">{{ trans('cruds.crecRegPerson.fields.person_address_a') }}</label>
                <input class="form-control {{ $errors->has('person_address_a') ? 'is-invalid' : '' }}" type="text" name="person_address_a" id="person_address_a" value="{{ old('person_address_a', '') }}">
                @if($errors->has('person_address_a'))
                    <span class="text-danger">{{ $errors->first('person_address_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_address_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="person_address_l">{{ trans('cruds.crecRegPerson.fields.person_address_l') }}</label>
                <input class="form-control {{ $errors->has('person_address_l') ? 'is-invalid' : '' }}" type="text" name="person_address_l" id="person_address_l" value="{{ old('person_address_l', '') }}">
                @if($errors->has('person_address_l'))
                    <span class="text-danger">{{ $errors->first('person_address_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_address_l_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="person_street">{{ trans('cruds.crecRegPerson.fields.person_street') }}</label>
                <input class="form-control {{ $errors->has('person_street') ? 'is-invalid' : '' }}" type="text" name="person_street" id="person_street" value="{{ old('person_street', '') }}">
                @if($errors->has('person_street'))
                    <span class="text-danger">{{ $errors->first('person_street') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_street_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="person_bldg_no">{{ trans('cruds.crecRegPerson.fields.person_bldg_no') }}</label>
                <input class="form-control {{ $errors->has('person_bldg_no') ? 'is-invalid' : '' }}" type="text" name="person_bldg_no" id="person_bldg_no" value="{{ old('person_bldg_no', '') }}">
                @if($errors->has('person_bldg_no'))
                    <span class="text-danger">{{ $errors->first('person_bldg_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_bldg_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="person_tel_no">{{ trans('cruds.crecRegPerson.fields.person_tel_no') }}</label>
                <input class="form-control {{ $errors->has('person_tel_no') ? 'is-invalid' : '' }}" type="text" name="person_tel_no" id="person_tel_no" value="{{ old('person_tel_no', '') }}">
                @if($errors->has('person_tel_no'))
                    <span class="text-danger">{{ $errors->first('person_tel_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_tel_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="person_fax_no">{{ trans('cruds.crecRegPerson.fields.person_fax_no') }}</label>
                <input class="form-control {{ $errors->has('person_fax_no') ? 'is-invalid' : '' }}" type="text" name="person_fax_no" id="person_fax_no" value="{{ old('person_fax_no', '') }}">
                @if($errors->has('person_fax_no'))
                    <span class="text-danger">{{ $errors->first('person_fax_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_fax_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="person_mobile_no">{{ trans('cruds.crecRegPerson.fields.person_mobile_no') }}</label>
                <input class="form-control {{ $errors->has('person_mobile_no') ? 'is-invalid' : '' }}" type="text" name="person_mobile_no" id="person_mobile_no" value="{{ old('person_mobile_no', '') }}">
                @if($errors->has('person_mobile_no'))
                    <span class="text-danger">{{ $errors->first('person_mobile_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_mobile_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="person_po_box">{{ trans('cruds.crecRegPerson.fields.person_po_box') }}</label>
                <input class="form-control {{ $errors->has('person_po_box') ? 'is-invalid' : '' }}" type="text" name="person_po_box" id="person_po_box" value="{{ old('person_po_box', '') }}">
                @if($errors->has('person_po_box'))
                    <span class="text-danger">{{ $errors->first('person_po_box') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_po_box_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="person_email">{{ trans('cruds.crecRegPerson.fields.person_email') }}</label>
                <input class="form-control {{ $errors->has('person_email') ? 'is-invalid' : '' }}" type="text" name="person_email" id="person_email" value="{{ old('person_email', '') }}">
                @if($errors->has('person_email'))
                    <span class="text-danger">{{ $errors->first('person_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="person_notes">{{ trans('cruds.crecRegPerson.fields.person_notes') }}</label>
                <input class="form-control {{ $errors->has('person_notes') ? 'is-invalid' : '' }}" type="text" name="person_notes" id="person_notes" value="{{ old('person_notes', '') }}">
                @if($errors->has('person_notes'))
                    <span class="text-danger">{{ $errors->first('person_notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_notes_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="person_type_id">{{ trans('cruds.crecRegPerson.fields.person_type') }}</label>
                <select class="form-control select2 {{ $errors->has('person_type') ? 'is-invalid' : '' }}" name="person_type_id" id="person_type_id" required>
                    @foreach($person_types as $id => $entry)
                        <option value="{{ $id }}" {{ old('person_type_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('person_type'))
                    <span class="text-danger">{{ $errors->first('person_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_type_helper') }}</span>
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