

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.crecRegRequest.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.crec-reg-requests.update", [$crecRegRequest->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="crec_code">{{ trans('cruds.crecRegRequest.fields.crec_code') }}</label>
                <input readonly class="form-control {{ $errors->has('crec_code') ? 'is-invalid' : '' }}" type="text" name="crec_code" id="crec_code" value="{{ old('crec_code', $crecRegRequest->crec_code) }}">
                @if($errors->has('crec_code'))
                    <span class="text-danger">{{ $errors->first('crec_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_appl_no">{{ trans('cruds.crecRegRequest.fields.crec_appl_no') }}</label>
                <input class="form-control {{ $errors->has('crec_appl_no') ? 'is-invalid' : '' }}" type="text" name="crec_appl_no" id="crec_appl_no" value="{{ old('crec_appl_no', $crecRegRequest->crec_appl_no) }}">
                @if($errors->has('crec_appl_no'))
                    <span class="text-danger">{{ $errors->first('crec_appl_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_appl_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="crec_appl_date">{{ trans('cruds.crecRegRequest.fields.crec_appl_date') }}</label>
                <input class="form-control date {{ $errors->has('crec_appl_date') ? 'is-invalid' : '' }}" type="text" name="crec_appl_date" id="crec_appl_date" value="{{ old('crec_appl_date', $crecRegRequest->crec_appl_date) }}" required>
                @if($errors->has('crec_appl_date'))
                    <span class="text-danger">{{ $errors->first('crec_appl_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_appl_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="crec_register_no">{{ trans('cruds.crecRegRequest.fields.crec_register_no') }}</label>
                <input class="form-control {{ $errors->has('crec_register_no') ? 'is-invalid' : '' }}" type="text" name="crec_register_no" id="crec_register_no" value="{{ old('crec_register_no', $crecRegRequest->crec_register_no) }}" required>
                @if($errors->has('crec_register_no'))
                    <span class="text-danger">{{ $errors->first('crec_register_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_register_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="crec_comp_name_a">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_a') }}</label>
                <input class="form-control {{ $errors->has('crec_comp_name_a') ? 'is-invalid' : '' }}" type="text" name="crec_comp_name_a" id="crec_comp_name_a" value="{{ old('crec_comp_name_a', $crecRegRequest->crec_comp_name_a) }}" required>
                @if($errors->has('crec_comp_name_a'))
                    <span class="text-danger">{{ $errors->first('crec_comp_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_comp_name_l">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_l') }}</label>
                <input class="form-control {{ $errors->has('crec_comp_name_l') ? 'is-invalid' : '' }}" type="text" name="crec_comp_name_l" id="crec_comp_name_l" value="{{ old('crec_comp_name_l', $crecRegRequest->crec_comp_name_l) }}">
                @if($errors->has('crec_comp_name_l'))
                    <span class="text-danger">{{ $errors->first('crec_comp_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_l_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_comp_name_h">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_h') }}</label>
                <input class="form-control {{ $errors->has('crec_comp_name_h') ? 'is-invalid' : '' }}" type="text" name="crec_comp_name_h" id="crec_comp_name_h" value="{{ old('crec_comp_name_h', $crecRegRequest->crec_comp_name_h) }}">
                @if($errors->has('crec_comp_name_h'))
                    <span class="text-danger">{{ $errors->first('crec_comp_name_h') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_h_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_start_date">{{ trans('cruds.crecRegRequest.fields.crec_start_date') }}</label>
                <input class="form-control date {{ $errors->has('crec_start_date') ? 'is-invalid' : '' }}" type="text" name="crec_start_date" id="crec_start_date" value="{{ old('crec_start_date', $crecRegRequest->crec_start_date) }}">
                @if($errors->has('crec_start_date'))
                    <span class="text-danger">{{ $errors->first('crec_start_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_start_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_brand_name">{{ trans('cruds.crecRegRequest.fields.crec_brand_name') }}</label>
                <input class="form-control {{ $errors->has('crec_brand_name') ? 'is-invalid' : '' }}" type="text" name="crec_brand_name" id="crec_brand_name" value="{{ old('crec_brand_name', $crecRegRequest->crec_brand_name) }}">
                @if($errors->has('crec_brand_name'))
                    <span class="text-danger">{{ $errors->first('crec_brand_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_brand_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="country_id">{{ trans('cruds.crecRegRequest.fields.country') }}</label>
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id" required>
                    @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ (old('country_id') ? old('country_id') : $crecRegRequest->country->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="governorate_id">{{ trans('cruds.crecRegRequest.fields.governorate') }}</label>
                <select class="form-control select2 {{ $errors->has('governorate') ? 'is-invalid' : '' }}" name="governorate_id" id="governorate_id">
                    @foreach($governorates as $id => $entry)
                        <option value="{{ $id }}" {{ (old('governorate_id') ? old('governorate_id') : $crecRegRequest->governorate->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('governorate'))
                    <span class="text-danger">{{ $errors->first('governorate') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.governorate_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="city_id">{{ trans('cruds.crecRegRequest.fields.city') }}</label>
                <select class="form-control select2 {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id" id="city_id" required>
                    @foreach($cities as $id => $entry)
                        <option value="{{ $id }}" {{ (old('city_id') ? old('city_id') : $crecRegRequest->city->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_address_a">{{ trans('cruds.crecRegRequest.fields.crec_address_a') }}</label>
                <input class="form-control {{ $errors->has('crec_address_a') ? 'is-invalid' : '' }}" type="text" name="crec_address_a" id="crec_address_a" value="{{ old('crec_address_a', $crecRegRequest->crec_address_a) }}">
                @if($errors->has('crec_address_a'))
                    <span class="text-danger">{{ $errors->first('crec_address_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_address_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_address_l">{{ trans('cruds.crecRegRequest.fields.crec_address_l') }}</label>
                <input class="form-control {{ $errors->has('crec_address_l') ? 'is-invalid' : '' }}" type="text" name="crec_address_l" id="crec_address_l" value="{{ old('crec_address_l', $crecRegRequest->crec_address_l) }}">
                @if($errors->has('crec_address_l'))
                    <span class="text-danger">{{ $errors->first('crec_address_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_address_l_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_street">{{ trans('cruds.crecRegRequest.fields.crec_street') }}</label>
                <input class="form-control {{ $errors->has('crec_street') ? 'is-invalid' : '' }}" type="text" name="crec_street" id="crec_street" value="{{ old('crec_street', $crecRegRequest->crec_street) }}">
                @if($errors->has('crec_street'))
                    <span class="text-danger">{{ $errors->first('crec_street') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_street_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_bldg_no">{{ trans('cruds.crecRegRequest.fields.crec_bldg_no') }}</label>
                <input class="form-control {{ $errors->has('crec_bldg_no') ? 'is-invalid' : '' }}" type="text" name="crec_bldg_no" id="crec_bldg_no" value="{{ old('crec_bldg_no', $crecRegRequest->crec_bldg_no) }}">
                @if($errors->has('crec_bldg_no'))
                    <span class="text-danger">{{ $errors->first('crec_bldg_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_bldg_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_tel_no">{{ trans('cruds.crecRegRequest.fields.crec_tel_no') }}</label>
                <input class="form-control {{ $errors->has('crec_tel_no') ? 'is-invalid' : '' }}" type="text" name="crec_tel_no" id="crec_tel_no" value="{{ old('crec_tel_no', $crecRegRequest->crec_tel_no) }}">
                @if($errors->has('crec_tel_no'))
                    <span class="text-danger">{{ $errors->first('crec_tel_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_tel_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_fax_no">{{ trans('cruds.crecRegRequest.fields.crec_fax_no') }}</label>
                <input class="form-control {{ $errors->has('crec_fax_no') ? 'is-invalid' : '' }}" type="text" name="crec_fax_no" id="crec_fax_no" value="{{ old('crec_fax_no', $crecRegRequest->crec_fax_no) }}">
                @if($errors->has('crec_fax_no'))
                    <span class="text-danger">{{ $errors->first('crec_fax_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_fax_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_mobile_no">{{ trans('cruds.crecRegRequest.fields.crec_mobile_no') }}</label>
                <input class="form-control {{ $errors->has('crec_mobile_no') ? 'is-invalid' : '' }}" type="text" name="crec_mobile_no" id="crec_mobile_no" value="{{ old('crec_mobile_no', $crecRegRequest->crec_mobile_no) }}">
                @if($errors->has('crec_mobile_no'))
                    <span class="text-danger">{{ $errors->first('crec_mobile_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_mobile_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_po_box">{{ trans('cruds.crecRegRequest.fields.crec_po_box') }}</label>
                <input class="form-control {{ $errors->has('crec_po_box') ? 'is-invalid' : '' }}" type="text" name="crec_po_box" id="crec_po_box" value="{{ old('crec_po_box', $crecRegRequest->crec_po_box) }}">
                @if($errors->has('crec_po_box'))
                    <span class="text-danger">{{ $errors->first('crec_po_box') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_po_box_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_email">{{ trans('cruds.crecRegRequest.fields.crec_email') }}</label>
                <input class="form-control {{ $errors->has('crec_email') ? 'is-invalid' : '' }}" type="text" name="crec_email" id="crec_email" value="{{ old('crec_email', $crecRegRequest->crec_email) }}">
                @if($errors->has('crec_email'))
                    <span class="text-danger">{{ $errors->first('crec_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_website">{{ trans('cruds.crecRegRequest.fields.crec_website') }}</label>
                <input class="form-control {{ $errors->has('crec_website') ? 'is-invalid' : '' }}" type="text" name="crec_website" id="crec_website" value="{{ old('crec_website', $crecRegRequest->crec_website) }}">
                @if($errors->has('crec_website'))
                    <span class="text-danger">{{ $errors->first('crec_website') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_website_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="crec_applicant_id_no">{{ trans('cruds.crecRegRequest.fields.crec_applicant_id_no') }}</label>
                <input class="form-control {{ $errors->has('crec_applicant_id_no') ? 'is-invalid' : '' }}" type="text" name="crec_applicant_id_no" id="crec_applicant_id_no" value="{{ old('crec_applicant_id_no', $crecRegRequest->crec_applicant_id_no) }}" required>
                @if($errors->has('crec_applicant_id_no'))
                    <span class="text-danger">{{ $errors->first('crec_applicant_id_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_applicant_id_no_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_applicant_name">{{ trans('cruds.crecRegRequest.fields.crec_applicant_name') }}</label>
                <input class="form-control {{ $errors->has('crec_applicant_name') ? 'is-invalid' : '' }}" type="text" name="crec_applicant_name" id="crec_applicant_name" value="{{ old('crec_applicant_name', $crecRegRequest->crec_applicant_name) }}">
                @if($errors->has('crec_applicant_name'))
                    <span class="text-danger">{{ $errors->first('crec_applicant_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_applicant_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_end_date">{{ trans('cruds.crecRegRequest.fields.crec_end_date') }}</label>
                <input class="form-control date {{ $errors->has('crec_end_date') ? 'is-invalid' : '' }}" type="text" name="crec_end_date" id="crec_end_date" value="{{ old('crec_end_date', $crecRegRequest->crec_end_date) }}">
                @if($errors->has('crec_end_date'))
                    <span class="text-danger">{{ $errors->first('crec_end_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_end_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_notes">{{ trans('cruds.crecRegRequest.fields.crec_notes') }}</label>
                <input class="form-control {{ $errors->has('crec_notes') ? 'is-invalid' : '' }}" type="text" name="crec_notes" id="crec_notes" value="{{ old('crec_notes', $crecRegRequest->crec_notes) }}">
                @if($errors->has('crec_notes'))
                    <span class="text-danger">{{ $errors->first('crec_notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_notes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_work_class_id">{{ trans('cruds.crecRegRequest.fields.crec_work_class') }}</label>
                <select class="form-control select2 {{ $errors->has('crec_work_class') ? 'is-invalid' : '' }}" name="crec_work_class_id" id="crec_work_class_id">
                    @foreach($crec_work_classes as $id => $entry)
                        <option value="{{ $id }}" {{ (old('crec_work_class_id') ? old('crec_work_class_id') : $crecRegRequest->crec_work_class->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('crec_work_class'))
                    <span class="text-danger">{{ $errors->first('crec_work_class') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_work_class_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="crec_work_name">{{ trans('cruds.crecRegRequest.fields.crec_work_name') }}</label>
                <input class="form-control {{ $errors->has('crec_work_name') ? 'is-invalid' : '' }}" type="text" name="crec_work_name" id="crec_work_name" value="{{ old('crec_work_name', $crecRegRequest->crec_work_name) }}">
                @if($errors->has('crec_work_name'))
                    <span class="text-danger">{{ $errors->first('crec_work_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_work_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="service_id">{{ trans('cruds.crecRegRequest.fields.service') }}</label>
                <select class="form-control select2 {{ $errors->has('service') ? 'is-invalid' : '' }}" name="service_id" id="service_id" required>
                    @foreach($services as $id => $entry)
                        <option value="{{ $id }}" {{ (old('service_id') ? old('service_id') : $crecRegRequest->service->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('service'))
                    <span class="text-danger">{{ $errors->first('service') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.service_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>