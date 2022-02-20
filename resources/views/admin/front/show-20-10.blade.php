@extends('layouts.admin1')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.crecRegRequest.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.front.store") }}" enctype="multipart/form-data">
            @csrf
            
                        <!--بداية التكرار-->
            <div class="card mt-2 border border-dark p-2">
                <h6 class="card-header">        {{ trans('global.create') }} {{ trans('cruds.crecRegRequest.title_singular') }}
</h6>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-2">
                  <label for="crec_code"> {{ trans('cruds.crecRegRequest.fields.crec_code') }}</label>

                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->crec_code   }}
<!--
                <input readonly class="form-control {{ $errors->has('crec_code') ? 'is-invalid' : '' }}" type="text" name="crec_code" id="crec_code" value="{{ $crecRegRequest->crec_code   }}">
                 @if($errors->has('crec_code'))
                    <span class="text-danger">{{ $errors->first('crec_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_code_helper') }}</span>
-->

                        </div>
                        <div class="col-md-2">
                          <label for="crec_appl_no">{{ trans('cruds.crecRegRequest.fields.crec_appl_no') }}</label>

                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->crec_appl_no }}
<!--
                <input class="form-control {{ $errors->has('crec_appl_no') ? 'is-invalid' : '' }}" type="text" name="crec_appl_no" id="crec_appl_no" value="{{ $crecRegRequest->crec_appl_no }}" >
                @if($errors->has('crec_appl_no'))
                    <span class="text-danger">{{ $errors->first('crec_appl_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_appl_no_helper') }}</span>
-->
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
               <label class="required" for="crec_appl_date">{{ trans('cruds.crecRegRequest.fields.crec_appl_date') }}
                            <span class="text-danger">*</span>
                            
                            </label>

                        </div>
                        <div class="col-md-4">
            {{--<input class="form-control date {{ $errors->has('crec_appl_date') ? 'is-invalid' : '' }}" type="text" name="crec_appl_date" id="crec_appl_date" value="{{ old('crec_appl_date') }}"  required>--}}
                     {{ $crecRegRequest->crec_appl_date }}       
                            
<!--
            <input class="form-control date {{ $errors->has('crec_appl_date') ? 'is-invalid' : '' }}" type="text" name="crec_appl_date" id="crec_appl_date" value="{{ $crecRegRequest->crec_appl_date }}"  required>
                            
                            
                @if($errors->has('crec_appl_date'))
                    <span class="text-danger">{{ $errors->first('crec_appl_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_appl_date_helper') }}</span>
-->

                        </div>
                        <div class="col-md-2">
           <label class="required" for="crec_register_no">{{ trans('cruds.crecRegRequest.fields.crec_register_no') }}
                            <span class="text-danger">*</span>
                            
                            </label>

                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->crec_register_no }}
<!--
              <input class="form-control {{ $errors->has('crec_register_no') ? 'is-invalid' : '' }}" type="text" name="crec_register_no" id="crec_register_no" value="{{ $crecRegRequest->crec_register_no }}" required>
                @if($errors->has('crec_register_no'))
                    <span class="text-danger">{{ $errors->first('crec_register_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_register_no_helper') }}</span>
-->

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label class="required" for="crec_comp_name_a">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_a') }}
                            <span class="text-danger">*</span>
                            
                            </label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->crec_comp_name_a }}
<!--
                  <input class="form-control {{ $errors->has('crec_comp_name_a') ? 'is-invalid' : '' }}" type="text" name="crec_comp_name_a" id="crec_comp_name_a" value="{{ $crecRegRequest->crec_comp_name_a }}" required>
                @if($errors->has('crec_comp_name_a'))
                    <span class="text-danger">{{ $errors->first('crec_comp_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_a_helper') }}</span>
-->

                        </div>
                        <div class="col-md-2">
                <label for="crec_comp_name_l">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_l') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->crec_comp_name_l }}
<!--
                <input class="form-control {{ $errors->has('crec_comp_name_l') ? 'is-invalid' : '' }}" type="text" name="crec_comp_name_l" id="crec_comp_name_l" value="{{ $crecRegRequest->crec_comp_name_l }}">
                @if($errors->has('crec_comp_name_l'))
                    <span class="text-danger">{{ $errors->first('crec_comp_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_l_helper') }}</span>
-->
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label for="crec_comp_name_h">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_h') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->crec_comp_name_l }}
<!--
                <input class="form-control {{ $errors->has('crec_comp_name_h') ? 'is-invalid' : '' }}" type="text" name="crec_comp_name_h" id="crec_comp_name_h" value="{{ $crecRegRequest->crec_comp_name_h }}">
                @if($errors->has('crec_comp_name_h'))
                    <span class="text-danger">{{ $errors->first('crec_comp_name_h') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_h_helper') }}</span>
-->
                        </div>
                        <div class="col-md-2">
                <label for="crec_start_date">{{ trans('cruds.crecRegRequest.fields.crec_start_date') }}</label>
                        </div>
                        <div class="col-md-4">
                {{--<input class="form-control date {{ $errors->has('crec_start_date') ? 'is-invalid' : '' }}" type="text" name="crec_start_date" id="crec_start_date" value="{{ old('crec_start_date') }}">--}}
<!--
                <input class="form-control date {{ $errors->has('crec_start_date') ? 'is-invalid' : '' }}" type="text" name="crec_start_date" id="crec_start_date"  value="{{ $crecRegRequest->crec_start_date }}" >
                @if($errors->has('crec_start_date'))
                    <span class="text-danger">{{ $errors->first('crec_start_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_start_date_helper') }}</span>
-->
                            {{ $crecRegRequest->crec_start_date }}
                        </div>
                    </div>
                    
                      <div class="row mb-3">
                        <div class="col-md-2">
                            {{ trans('cruds.crecRegRequest.fields.crec_brand_name') }}
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->crec_brand_name }}
<!--
            <input class="form-control {{ $errors->has('crec_brand_name') ? 'is-invalid' : '' }}" type="text" name="crec_brand_name" id="crec_brand_name" value="{{ $crecRegRequest->crec_brand_name }}">
                @if($errors->has('crec_brand_name'))
                    <span class="text-danger">{{ $errors->first('crec_brand_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_brand_name_helper') }}</span>
-->

                        </div>
                        <div class="col-md-2">
                <label class="required" for="country_id">{{ trans('cruds.crecRegRequest.fields.country') }}
                            <span class="text-danger">*</span>
                            </label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->country->country_name_a }}
<!--              <input value="{{ $crecRegRequest->country->country_tel_prefix }}" type="text" class="form-control">-->

                {{--<select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id" required>
                    @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>--}}
<!--
                @if($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.country_helper') }}</span>
-->
                        </div>
                    </div>  <div class="row mb-3">
                        <div class="col-md-2">
                <label for="governorate_id">{{ trans('cruds.crecRegRequest.fields.governorate') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->governorate->governorate_name_a ?? '' }}
<!--                 <input value="{{ $crecRegRequest->governorate->governorate_name_a ?? '' }}" type="text" class="form-control">-->
      
                            
                            
                {{--<select class="form-control select2 {{ $errors->has('governorate') ? 'is-invalid' : '' }}" name="governorate_id" id="governorate_id">
                    @foreach($governorates as $id => $entry)
                        <option value="{{ $id }}" {{ old('governorate_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>--}}
                @if($errors->has('governorate'))
                    <span class="text-danger">{{ $errors->first('governorate') }}</span>
                @endif
<!--                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.governorate_helper') }}</span>-->
                        </div>
                        <div class="col-md-2">
                <label class="required" for="city_id">{{ trans('cruds.crecRegRequest.fields.city') }}
                            <span class="text-danger">*</span>
                            </label>
                        </div>
                        <div class="col-md-4">
                           {{ $crecRegRequest->city->city_name_a }} 
<!--             <input value="{{ $crecRegRequest->city->city_name_a }}" type="text" class="form-control">-->
               
                            
                {{--<select class="form-control select2 {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id" id="city_id" required>
                    @foreach($cities as $id => $entry)
                        <option value="{{ $id }}" {{ old('city_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>--}}
<!--
                @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.city_helper') }}</span>
-->
                        </div>
                    </div>  <div class="row mb-3">
                        <div class="col-md-2">
                <label for="crec_address_a">{{ trans('cruds.crecRegRequest.fields.crec_address_a') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->crec_address_a }}
<!--
                <input class="form-control {{ $errors->has('crec_address_a') ? 'is-invalid' : '' }}" type="text" name="crec_address_a" id="crec_address_a" value="{{ $crecRegRequest->crec_address_a }}">
                @if($errors->has('crec_address_a'))
                    <span class="text-danger">{{ $errors->first('crec_address_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_address_a_helper') }}</span>
-->
                        </div>
                        <div class="col-md-2">
                <label for="crec_address_l">{{ trans('cruds.crecRegRequest.fields.crec_address_l') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->crec_address_l }}
<!--
                <input class="form-control {{ $errors->has('crec_address_l') ? 'is-invalid' : '' }}" type="text" name="crec_address_l" id="crec_address_l" value="{{ $crecRegRequest->crec_address_l }}">
                @if($errors->has('crec_address_l'))
                    <span class="text-danger">{{ $errors->first('crec_address_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_address_l_helper') }}</span>
-->
                        </div>
                    </div>  <div class="row mb-3">
                        <div class="col-md-2">
                <label for="crec_street">{{ trans('cruds.crecRegRequest.fields.crec_street') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->crec_street }}
<!--
                <input class="form-control {{ $errors->has('crec_street') ? 'is-invalid' : '' }}" type="text" name="crec_street" id="crec_street" value="{{ $crecRegRequest->crec_street }}">
                @if($errors->has('crec_street'))
                    <span class="text-danger">{{ $errors->first('crec_street') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_street_helper') }}</span>
-->
                        </div>
                        <div class="col-md-2">
                <label for="crec_bldg_no">{{ trans('cruds.crecRegRequest.fields.crec_bldg_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->crec_bldg_no }}
<!--
                <input class="form-control {{ $errors->has('crec_bldg_no') ? 'is-invalid' : '' }}" type="text" name="crec_bldg_no" id="crec_bldg_no" value="{{ $crecRegRequest->crec_bldg_no }}">
                @if($errors->has('crec_bldg_no'))
                    <span class="text-danger">{{ $errors->first('crec_bldg_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_bldg_no_helper') }}</span>
-->
                        </div>
                    </div> 
                    
                    
                    {{--<div class="row mb-3">
                        <div class="col-md-2">
                <label for="crec_tel_no">{{ trans('cruds.crecRegRequest.fields.crec_tel_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_tel_no') ? 'is-invalid' : '' }}" type="text" name="crec_tel_no" id="crec_tel_no" value="{{ old('crec_tel_no', '') }}">
                @if($errors->has('crec_tel_no'))
                    <span class="text-danger">{{ $errors->first('crec_tel_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_tel_no_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_fax_no">{{ trans('cruds.crecRegRequest.fields.crec_fax_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_fax_no') ? 'is-invalid' : '' }}" type="text" name="crec_fax_no" id="crec_fax_no" value="{{ old('crec_fax_no', '') }}">
                @if($errors->has('crec_fax_no'))
                    <span class="text-danger">{{ $errors->first('crec_fax_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_fax_no_helper') }}</span>
                        </div>
                    </div> --}}
                    
                    
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label for="crec_mobile_no">{{ trans('cruds.crecRegRequest.fields.crec_mobile_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->crec_mobile_no }}
<!--
                <input class="form-control {{ $errors->has('crec_mobile_no') ? 'is-invalid' : '' }}" type="text" name="crec_mobile_no" id="crec_mobile_no" value="{{ $crecRegRequest->crec_mobile_no }}">
                @if($errors->has('crec_mobile_no'))
                    <span class="text-danger">{{ $errors->first('crec_mobile_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_mobile_no_helper') }}</span>
-->
                        </div>
                        <div class="col-md-2">
                <label for="crec_po_box">{{ trans('cruds.crecRegRequest.fields.crec_po_box') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->crec_po_box }}
<!--
                <input class="form-control {{ $errors->has('crec_po_box') ? 'is-invalid' : '' }}" type="text" name="crec_po_box" id="crec_po_box" value="{{ $crecRegRequest->crec_po_box }}">
                @if($errors->has('crec_po_box'))
                    <span class="text-danger">{{ $errors->first('crec_po_box') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_po_box_helper') }}</span>
-->
                        </div>
                    </div>
                    
                    
                    {{--<div class="row mb-3">
                        <div class="col-md-2">
                <label for="crec_email">{{ trans('cruds.crecRegRequest.fields.crec_email') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_email') ? 'is-invalid' : '' }}" type="text" name="crec_email" id="crec_email" value="{{ $crecRegRequest->crec_email }}">
                @if($errors->has('crec_email'))
                    <span class="text-danger">{{ $errors->first('crec_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_email_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_website">{{ trans('cruds.crecRegRequest.fields.crec_website') }}</label>
                        </div>
                        <div class="col-md-4">
             <input class="form-control {{ $errors->has('crec_website') ? 'is-invalid' : '' }}" type="text" name="crec_website" id="crec_website" value="{{ $crecRegRequest->crec_website }}">
                @if($errors->has('crec_website'))
                    <span class="text-danger">{{ $errors->first('crec_website') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_website_helper') }}</span>

                        </div>
                    </div> --}}
                    
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label class="required" for="crec_applicant_id_no">{{ trans('cruds.crecRegRequest.fields.crec_applicant_id_no') }}
                            <span class="text-danger">*</span>
                            </label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->crec_applicant_id_no }}
<!--
                <input class="form-control {{ $errors->has('crec_applicant_id_no') ? 'is-invalid' : '' }}" type="text" name="crec_applicant_id_no" id="crec_applicant_id_no" value="{{ $crecRegRequest->crec_applicant_id_no }}" required>
                @if($errors->has('crec_applicant_id_no'))
                    <span class="text-danger">{{ $errors->first('crec_applicant_id_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_applicant_id_no_helper') }}</span>
-->
                        </div>
                        <div class="col-md-2">
                <label for="crec_applicant_name">{{ trans('cruds.crecRegRequest.fields.crec_applicant_name') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->crec_applicant_name }}
<!--
                <input class="form-control {{ $errors->has('crec_applicant_name') ? 'is-invalid' : '' }}" type="text" name="crec_applicant_name" id="crec_applicant_name" value="{{ $crecRegRequest->crec_applicant_name }}">
                @if($errors->has('crec_applicant_name'))
                    <span class="text-danger">{{ $errors->first('crec_applicant_name') }}</span>
-->
<!--
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_applicant_name_helper') }}</span>
-->
                        </div>
                    </div> 
                    
                    
                    {{--<div class="row mb-3">
                        <div class="col-md-2">
                <label for="crec_end_date">{{ trans('cruds.crecRegRequest.fields.crec_end_date') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control date {{ $errors->has('crec_end_date') ? 'is-invalid' : '' }}" type="text" name="crec_end_date" id="crec_end_date" value="{{ old('crec_end_date') }}">
                @if($errors->has('crec_end_date'))
                    <span class="text-danger">{{ $errors->first('crec_end_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_end_date_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_notes">{{ trans('cruds.crecRegRequest.fields.crec_notes') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_notes') ? 'is-invalid' : '' }}" type="text" name="crec_notes" id="crec_notes" value="{{ old('crec_notes', '') }}">
                @if($errors->has('crec_notes'))
                    <span class="text-danger">{{ $errors->first('crec_notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_notes_helper') }}</span>
                        </div>
                    </div>--}}
                    
                    
                    
                      <div class="row mb-3">
                        <div class="col-md-2">
                <label for="crec_work_class_id">{{ trans('cruds.crecRegRequest.fields.crec_work_class') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->crec_work_class->work_class_desc_a ?? '' }}
                                            {{--<select class="form-control select2 {{ $errors->has('crec_work_class') ? 'is-invalid' : '' }}" name="crec_work_class_id" id="crec_work_class_id">
                    @foreach($crec_work_classes as $id => $entry)
                        <option value="{{ $id }}" {{ old('crec_work_class_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>--}}
<!--
                <input value=" {{ $crecRegRequest->crec_work_class->work_class_desc_a ?? '' }}" type="text" class="form-control">
           
                            
                            
                @if($errors->has('crec_work_class'))
                    <span class="text-danger">{{ $errors->first('crec_work_class') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_work_class_helper') }}</span>
-->

                        </div>
                        <div class="col-md-2">
                <label for="crec_work_name">{{ trans('cruds.crecRegRequest.fields.crec_work_name') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegRequest->crec_work_name }}
<!--
                <input class="form-control {{ $errors->has('crec_work_name') ? 'is-invalid' : '' }}" type="text" name="crec_work_name" id="crec_work_name" value="{{ $crecRegRequest->crec_work_name }}">
                @if($errors->has('crec_work_name'))
                    <span class="text-danger">{{ $errors->first('crec_work_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_work_name_helper') }}</span>
-->
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
            </div>
             <!--نهاية التكرار-->

            
            
               <!--بداية التكرار2-->
            
                                   <!--بداية التكرار22-->
            @foreach($crecRegPeoples as  $crecRegPerson)
            <div class="card mt-2 border border-dark p-2">
                <h6 class="card-header"> {{ trans('global.show') }} {{ trans('cruds.crecRegPerson.title') }}</h6>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegPerson.fields.crec_reg_request') }} </label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->crec_reg_request->crec_comp_name_a ?? '' }}
<!--                            <input value="{{ $crecRegPerson->crec_reg_request->crec_comp_name_a ?? '' }}"   type="text" class="form-control">-->
                        </div>
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegPerson.fields.person_id_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->person_id_no }}
<!--                            <input value="{{ $crecRegPerson->person_id_no }}"  type="text" class="form-control">-->
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegPerson.fields.person_type') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->person_type->person_type_name_a }}
<!--                            <input value=" {{ $crecRegPerson->person_type->person_type_name_a }}"  type="text" class="form-control">-->
                        </div>
                        <div class="col-md-2">
                            <label>{{ trans('cruds.crecRegPerson.fields.person_name_a') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->person_name_a }}
<!--                            <input value="{{ $crecRegPerson->person_name_a }}"  type="text" class="form-control">-->
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_name_l') }}
                            </label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->person_name_l }}
<!--                            <input value=" {{ $crecRegPerson->person_name_l }}"  type="text" class="form-control">-->
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegPerson.fields.person_birth_date') }}
                            </label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->person_birth_date }}
<!--                            <input value="{{ $crecRegPerson->person_birth_date }}"  type="text" class="form-control">-->
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_birth_place') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->person_birth_place }}
<!--                            <input value=" {{ $crecRegPerson->person_birth_place }}"  type="text" class="form-control">-->
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_gender') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->person_gender }}
<!--                         <input value="{{ $crecRegPerson->person_gender }}"  type="text" class="form-control">-->

                        </div>
                    </div> 
                    
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_nationality') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->person_nationality->country_name_a ?? '' }}
<!--                            <input value="   {{ $crecRegPerson->person_nationality->nationality_a ?? '' }}"  type="text" class="form-control">-->
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.country') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->country->country_name_a ?? '' }}
<!--                         <input value="{{ $crecRegPerson->country->country_name_a ?? '' }}"  type="text" class="form-control">-->

                        </div>
                    </div>   <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.governorate') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->governorate->governorate_name_a ?? '' }}
<!--                            <input value="  {{ $crecRegPerson->governorate->governorate_name_a ?? '' }}"  type="text" class="form-control">-->
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.city') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->city->city_name_a ?? '' }}
<!--                         <input value=" {{ $crecRegPerson->city->city_name_a ?? '' }}"  type="text" class="form-control">-->

                        </div>
                    </div>   <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_address_a') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->person_address_a }}
<!--                            <input value=" {{ $crecRegPerson->person_address_a }}"  type="text" class="form-control">-->
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_address_l') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->person_address_l }}
<!--                         <input value="{{ $crecRegPerson->person_address_l }}"  type="text" class="form-control">-->

                        </div>
                    </div>   <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_street') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->person_street }}
<!--                            <input value=" {{ $crecRegPerson->person_street }}"  type="text" class="form-control">-->
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_bldg_no') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->person_bldg_no }}
<!--                         <input value="{{ $crecRegPerson->person_bldg_no }}"  type="text" class="form-control">-->

                        </div>
                    </div>   <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_tel_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->person_tel_no }}
<!--                            <input value=" {{ $crecRegPerson->person_tel_no }}"  type="text" class="form-control">-->
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_fax_no') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->person_fax_no }}
<!--                         <input value="{{ $crecRegPerson->person_fax_no }}"  type="text" class="form-control">-->

                        </div> 
                    </div>   <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_mobile_no') }}</label>
                        </div>
                        <div class="col-md-4">
                             {{ $crecRegPerson->person_mobile_no }}
<!--                            <input value=" {{ $crecRegPerson->person_mobile_no }}"  type="text" class="form-control">-->
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_po_box') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->person_po_box }}
<!--                         <input value="{{ $crecRegPerson->person_po_box }}"  type="text" class="form-control">-->

                        </div>
                    </div>  
                    
                    
 
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label class="required" for="person_type_id">{{ trans('cruds.crecRegPerson.fields.person_type') }}</label>
                        </div>
                        <div class="col-md-4">
                            {{ $crecRegPerson->person_type->person_type_name_a }}
<!--                         <input value="{{ $crecRegPerson->person_type->person_type_name_a }}"  type="text" class="form-control">-->
                        </div>
                        
                        
                    </div>   
 
                    
<!--
                    
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.deleg_address_a') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegPerson->deleg_address_a }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.deleg_address_l') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input value="{{ $crecRegPerson->deleg_address_l }}"  type="text" class="form-control">

                        </div>
                    </div>
-->
                    
<!--
                    
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.deleg_street') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegPerson->deleg_street }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.deleg_bldg_no') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input value="{{ $crecRegPerson->deleg_bldg_no }}"  type="text" class="form-control">

                        </div>
                    </div>  
-->
                    
                    
<!--
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.deleg_tel_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegPerson->deleg_tel_no }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.deleg_fax_no') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input value="{{ $crecRegPerson->deleg_fax_no }}"  type="text" class="form-control">

                        </div>
                    </div>   <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.deleg_mobile_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegPerson->deleg_mobile_no }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.deleg_po_box') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input value="{{ $crecRegPerson->deleg_po_box }}"  type="text" class="form-control">

                        </div>
                    </div><div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.deleg_email') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegPerson->deleg_email }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.deleg_website') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input value="{{ $crecRegPerson->deleg_website }}"  type="text" class="form-control">

                        </div>
                    </div>  
-->
                    
                    
                    
                </div>
            </div>
            @endforeach
             <!--نهاية التكرار-->
            
                     
             
             <!--نهاية التكرا2ر-->
 
            
            
            
            
                        <!--بداية التكرار3-->
                        
             @foreach($crecRegBranches as  $crecRegBranch)
                      <!--بداية التكرا3ر-->
            <div class="card mt-2 border border-dark p-2">
                <h6 class="card-header"> {{ trans('global.show') }} {{ trans('cruds.crecRegBranch.title') }}</h6>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegBranch.fields.crec_reg_request') }} </label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegBranch->crec_reg_request->crec_comp_name_a ?? '' }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegBranch.fields.branch_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegBranch->branch_no }}" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegBranch.fields.branch_brand_name') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegBranch->branch_brand_name }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegBranch.fields.branch_open_date') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegBranch->branch_open_date }}" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegBranch.fields.country') }}
                            </label>
                        </div>
                        <div class="col-md-4">
                            <input value="  {{ $crecRegBranch->country->country_name_a ?? '' }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegBranch.fields.governorate') }}
                            </label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegBranch->governorate->governorate_name_a ?? '' }}" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegBranch.fields.city') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegBranch->city->city_name_a ?? '' }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegBranch.fields.branch_address_a') }}
                                </label>
                        </div>
                        <div class="col-md-4">
                     <input value=" {{ $crecRegBranch->branch_address_a }}" type="text" class="form-control">

                        </div>
                    </div>     <div class="row mb-3">
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegBranch.fields.branch_address_l') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegBranch->branch_address_l ?? '' }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegBranch.fields.branch_street') }}
                                </label>
                        </div>
                        <div class="col-md-4">
                     <input value=" {{ $crecRegBranch->branch_street }}" type="text" class="form-control">

                        </div>
                    </div>     <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegBranch.fields.branch_bldg_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegBranch->branch_bldg_no ?? '' }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegBranch.fields.branch_tel_no') }}
                                </label>
                        </div>
                        <div class="col-md-4">
                     <input value=" {{ $crecRegBranch->branch_tel_no }}" type="text" class="form-control">

                        </div>
                    </div>     <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegBranch.fields.branch_fax_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegBranch->branch_fax_no }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegBranch.fields.branch_mobile_no') }}
                                </label>
                        </div>
                        <div class="col-md-4">
                     <input value=" {{ $crecRegBranch->branch_mobile_no }}" type="text" class="form-control">

                        </div>
                    </div>     <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegBranch.fields.branch_po_box') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegBranch->branch_po_box ?? '' }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegBranch.fields.branch_email') }}
                                </label>
                        </div>
                        <div class="col-md-4">
                     <input value=" {{ $crecRegBranch->branch_email }}" type="text" class="form-control">

                        </div>
                    </div>     <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegBranch.fields.branch_website') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegBranch->branch_website}}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegBranch.fields.branch_contact_person') }}
                                </label>
                        </div>
                        <div class="col-md-4">
                     <input value=" {{ $crecRegBranch->branch_contact_person }}" type="text" class="form-control">

                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegBranch.fields.branch_work_class') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegBranch->branch_work_class->work_class_desc_a ?? ''}}" type="text" class="form-control">
                        </div>
                        {{--<div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegBranch.fields.branch_contact_person') }}
                                </label>
                        </div>
                        <div class="col-md-4">
                     <input value=" {{ $crecRegBranch->branch_contact_person }}" type="text" class="form-control">

                        </div>--}}
                    </div>
                </div>
            </div>
             <!--نهاية التكرار3-->
  @endforeach
            
                        <!--بداية التكرار3-->
            
 
             <!--نهاية التكرا3ر-->
            
            {{--@foreach($crecRegDelegates as  $crecRegDelegate)
                        <!--بداية التكرار-->
            <div class="card mt-2 border border-dark p-2">
                <h6 class="card-header">{{ trans('global.show') }} {{ trans('cruds.crecRegDelegate.title') }}</h6>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegDelegate.fields.crec_reg_request') }} </label>
                        </div>
                        <div class="col-md-4">
                            <input value="     {{ $crecRegDelegate->crec_reg_request->crec_comp_name_a ?? '' }}" type="text" class="form-control">
                        </div>
                         
                    </div>
                 </div>
            </div>
             <!--نهاية التكرار-->
             @endforeach--}}
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

            
            
                        <!--بداية التكرا4ر-->
                                    <h6 class="card-header">  {{ trans('global.show') }} {{ trans('cruds.crecRegDoc.title') }}</h6>
 
             @foreach($crecRegDocs as  $crecRegDoc)
                       <!--بداية التكرار-->
           {{-- <div class="card mt-2 border border-dark p-2">
                <h6 class="card-header">  {{ trans('global.show') }} {{ trans('cruds.crecRegDoc.title') }}</h6>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegDoc.fields.crec_reg_request') }} </label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegDoc->crec_reg_request->crec_comp_name_a ?? '' }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegDoc.fields.neededdoc') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegDoc->neededdoc->needed_doc_name_a ?? '' }}" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegDoc.fields.docs_date') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegDoc->docs_date }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>{{ trans('cruds.crecRegDoc.fields.docs_ref_code') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegDoc->docs_ref_code }}" type="text" class="form-control">
                        </div>
                    </div>--}}
                    {{--<div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegDoc.fields.doc_file') }}
                            </label>
                        </div>
                        <div class="col-md-4">
                       <a target="_blank" href="/{{$crecRegDoc->doc_file}}">عرض الملف</a>

                        </div>
                     </div>--}}
                
                </div>
            </div>
             <!--نهاية التكرار-->
 
            
            @endforeach
            
              @foreach($arr as  $med)
                <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegDoc.fields.doc_file') }}
                            </label>
                        </div>
                    <?php
//                    echo substr($med[0]->file_name,0,14);
//                    die();
                    $folder = substr($med[0]->file_name,0,14);
                   //    echo $folder;
                    ?>
                        <div class="col-md-4">
                       <a target="_blank" href="/storage/{{$folder}}/{{$med[0]->file_name}}">عرض الملف</a>

                        </div>
                     </div>
            @endforeach
            
            
 

            
            
            
            
             
            
            
            
            
            
            
            
            
            
            
            
       
            
            
            
                
                
                
                
            {{--<div class="form-group">
                <button class="btn btn-danger" type="submit" name="save" value="save">
                    {{ trans('global.save') }}
                </button>
            </div>--}}
            
            
               {{--<div class="form-group">
                <button   class="btn btn-success" type="submit" name="save_edit" value="save_edit">
                   {{ trans('global.save_edit') }}
                </button>
            </div> --}}
            
            
        </form>
        
        
     
        
        
    </div>
</div>



@endsection