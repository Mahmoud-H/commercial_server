@extends('layouts.admin1')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.crecRegRequest.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.front.store") }}" autocomplete="off" enctype="multipart/form-data">
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
                <input readonly class="form-control {{ $errors->has('crec_code') ? 'is-invalid' : '' }}" type="text" name="crec_code" id="crec_code" value="{{ old('crec_code', '') }}">
                 @if($errors->has('crec_code'))
                    <span class="text-danger">{{ $errors->first('crec_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_code_helper') }}</span>

                        </div>
                        <div class="col-md-2">
                          <label for="crec_appl_no">{{ trans('cruds.crecRegRequest.fields.crec_appl_no') }}</label>

                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_appl_no') ? 'is-invalid' : '' }}" type="text" name="crec_appl_no" id="crec_appl_no" value="{{ old('crec_appl_no', '') }}">
                @if($errors->has('crec_appl_no'))
                    <span class="text-danger">{{ $errors->first('crec_appl_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_appl_no_helper') }}</span>
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
                            
                            
            <input class="form-control date {{ $errors->has('crec_appl_date') ? 'is-invalid' : '' }}" type="text" name="crec_appl_date" id="crec_appl_date" value="{{ old('crec_appl_date',Carbon\Carbon::parse(now())->format(config('panel.date_format'))) }}"  required>
                            
                            
                @if($errors->has('crec_appl_date'))
                    <span class="text-danger">{{ $errors->first('crec_appl_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_appl_date_helper') }}</span>

                        </div>
                        <div class="col-md-2">
           <label class="required" for="crec_register_no">{{ trans('cruds.crecRegRequest.fields.crec_register_no') }}
                            <span class="text-danger">*</span>
                            
                            </label>

                        </div>
                        <div class="col-md-4">
                                           <input class="form-control {{ $errors->has('crec_register_no') ? 'is-invalid' : '' }}" type="text" name="crec_register_no" id="crec_register_no" value="{{ old('crec_register_no', '') }}" required>
                @if($errors->has('crec_register_no'))
                    <span class="text-danger">{{ $errors->first('crec_register_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_register_no_helper') }}</span>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label class="required" for="crec_comp_name_a">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_a') }}
                            <span class="text-danger">*</span>
                            
                            </label>
                        </div>
                        <div class="col-md-4">
                                           <input class="form-control {{ $errors->has('crec_comp_name_a') ? 'is-invalid' : '' }}" type="text" name="crec_comp_name_a" id="crec_comp_name_a" value="{{ old('crec_comp_name_a', '') }}" required>
                @if($errors->has('crec_comp_name_a'))
                    <span class="text-danger">{{ $errors->first('crec_comp_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_a_helper') }}</span>

                        </div>
                        <div class="col-md-2">
                <label for="crec_comp_name_l">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_l') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_comp_name_l') ? 'is-invalid' : '' }}" type="text" name="crec_comp_name_l" id="crec_comp_name_l" value="{{ old('crec_comp_name_l', '') }}">
                @if($errors->has('crec_comp_name_l'))
                    <span class="text-danger">{{ $errors->first('crec_comp_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_l_helper') }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label for="crec_comp_name_h">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_h') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_comp_name_h') ? 'is-invalid' : '' }}" type="text" name="crec_comp_name_h" id="crec_comp_name_h" value="{{ old('crec_comp_name_h', '') }}">
                @if($errors->has('crec_comp_name_h'))
                    <span class="text-danger">{{ $errors->first('crec_comp_name_h') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_h_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_start_date">{{ trans('cruds.crecRegRequest.fields.crec_start_date') }}</label>
                        </div>
                        <div class="col-md-4">
                {{--<input class="form-control date {{ $errors->has('crec_start_date') ? 'is-invalid' : '' }}" type="text" name="crec_start_date" id="crec_start_date" value="{{ old('crec_start_date') }}">--}}
                <input class="form-control date {{ $errors->has('crec_start_date') ? 'is-invalid' : '' }}" type="text" name="crec_start_date" id="crec_start_date"  value="{{ old('crec_start_date',Carbon\Carbon::parse(now())->format(config('panel.date_format'))) }}" >
                @if($errors->has('crec_start_date'))
                    <span class="text-danger">{{ $errors->first('crec_start_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_start_date_helper') }}</span>
                        </div>
                    </div>
                    
                      <div class="row mb-3">
                        <div class="col-md-2">
                            {{ trans('cruds.crecRegRequest.fields.crec_brand_name') }}
                        </div>
                        <div class="col-md-4">
            <input class="form-control {{ $errors->has('crec_brand_name') ? 'is-invalid' : '' }}" type="text" name="crec_brand_name" id="crec_brand_name" value="{{ old('crec_brand_name', '#') }}">
                @if($errors->has('crec_brand_name'))
                    <span class="text-danger">{{ $errors->first('crec_brand_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_brand_name_helper') }}</span>

                        </div>
                        <div class="col-md-2">
                <label class="required" for="country_id">{{ trans('cruds.crecRegRequest.fields.country') }}
                            <span class="text-danger">*</span>
                            </label>
                        </div>
                        <div class="col-md-4">
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id" required>
                    @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}> {{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.country_helper') }}</span>
                        </div>
                    </div>  <div class="row mb-3">
                        <div class="col-md-2">
                <label for="governorate_id">{{ trans('cruds.crecRegRequest.fields.governorate') }}</label>
                        </div>
                        <div class="col-md-4">
                <select class="form-control select2 {{ $errors->has('governorate') ? 'is-invalid' : '' }}" name="governorate_id" id="governorate_id">
                    @foreach($governorates as $id => $entry)
                        <option value="{{ $id }}" {{ old('governorate_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('governorate'))
                    <span class="text-danger">{{ $errors->first('governorate') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.governorate_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label class="required" for="city_id">{{ trans('cruds.crecRegRequest.fields.city') }}
                            <span class="text-danger">*</span>
                            </label>
                        </div>
                        <div class="col-md-4">
                <select class="form-control select2 {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id" id="city_id" required>
                    @foreach($cities as $id => $entry)
                        <option value="{{ $id }}" {{ old('city_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.city_helper') }}</span>
                        </div>
                    </div>  <div class="row mb-3">
                        <div class="col-md-2">
                <label for="crec_address_a">{{ trans('cruds.crecRegRequest.fields.crec_address_a') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_address_a') ? 'is-invalid' : '' }}" type="text" name="crec_address_a" id="crec_address_a" value="{{ old('crec_address_a', '') }}">
                @if($errors->has('crec_address_a'))
                    <span class="text-danger">{{ $errors->first('crec_address_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_address_a_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_address_l">{{ trans('cruds.crecRegRequest.fields.crec_address_l') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_address_l') ? 'is-invalid' : '' }}" type="text" name="crec_address_l" id="crec_address_l" value="{{ old('crec_address_l', '') }}">
                @if($errors->has('crec_address_l'))
                    <span class="text-danger">{{ $errors->first('crec_address_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_address_l_helper') }}</span>
                        </div>
                    </div>  <div class="row mb-3">
                        <div class="col-md-2">
                <label for="crec_street">{{ trans('cruds.crecRegRequest.fields.crec_street') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_street') ? 'is-invalid' : '' }}" type="text" name="crec_street" id="crec_street" value="{{ old('crec_street', '') }}">
                @if($errors->has('crec_street'))
                    <span class="text-danger">{{ $errors->first('crec_street') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_street_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_bldg_no">{{ trans('cruds.crecRegRequest.fields.crec_bldg_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_bldg_no') ? 'is-invalid' : '' }}" type="text" name="crec_bldg_no" id="crec_bldg_no" value="{{ old('crec_bldg_no', '') }}">
                @if($errors->has('crec_bldg_no'))
                    <span class="text-danger">{{ $errors->first('crec_bldg_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_bldg_no_helper') }}</span>
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
                <input class="form-control {{ $errors->has('crec_mobile_no') ? 'is-invalid' : '' }}" type="text" name="crec_mobile_no" id="crec_mobile_no" value="{{ old('crec_mobile_no', '') }}">
                @if($errors->has('crec_mobile_no'))
                    <span class="text-danger">{{ $errors->first('crec_mobile_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_mobile_no_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_po_box">{{ trans('cruds.crecRegRequest.fields.crec_po_box') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_po_box') ? 'is-invalid' : '' }}" type="text" name="crec_po_box" id="crec_po_box" value="{{ old('crec_po_box', '') }}">
                @if($errors->has('crec_po_box'))
                    <span class="text-danger">{{ $errors->first('crec_po_box') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_po_box_helper') }}</span>
                        </div>
                    </div>
                    
                    
                    {{--<div class="row mb-3">
                        <div class="col-md-2">
                <label for="crec_email">{{ trans('cruds.crecRegRequest.fields.crec_email') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_email') ? 'is-invalid' : '' }}" type="text" name="crec_email" id="crec_email" value="{{ old('crec_email', '') }}">
                @if($errors->has('crec_email'))
                    <span class="text-danger">{{ $errors->first('crec_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_email_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_website">{{ trans('cruds.crecRegRequest.fields.crec_website') }}</label>
                        </div>
                        <div class="col-md-4">
                                           <input class="form-control {{ $errors->has('crec_website') ? 'is-invalid' : '' }}" type="text" name="crec_website" id="crec_website" value="{{ old('crec_website', '') }}">
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
                <input class="form-control {{ $errors->has('crec_applicant_id_no') ? 'is-invalid' : '' }}" type="text" name="crec_applicant_id_no" id="crec_applicant_id_no" value="{{ old('crec_applicant_id_no', '') }}" required>
                @if($errors->has('crec_applicant_id_no'))
                    <span class="text-danger">{{ $errors->first('crec_applicant_id_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_applicant_id_no_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_applicant_name">{{ trans('cruds.crecRegRequest.fields.crec_applicant_name') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_applicant_name') ? 'is-invalid' : '' }}" type="text" name="crec_applicant_name" id="crec_applicant_name" value="{{ old('crec_applicant_name', '') }}">
                @if($errors->has('crec_applicant_name'))
                    <span class="text-danger">{{ $errors->first('crec_applicant_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_applicant_name_helper') }}</span>
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
                                            <select class="form-control select2 {{ $errors->has('crec_work_class') ? 'is-invalid' : '' }}" name="crec_work_class_id" id="crec_work_class_id">
                    @foreach($crec_work_classes as $id => $entry)
                        <option value="{{ $id }}" {{ old('crec_work_class_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('crec_work_class'))
                    <span class="text-danger">{{ $errors->first('crec_work_class') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_work_class_helper') }}</span>

                        </div>
                        <div class="col-md-2">
                <label for="crec_work_name">{{ trans('cruds.crecRegRequest.fields.crec_work_name') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_work_name') ? 'is-invalid' : '' }}" type="text" name="crec_work_name" id="crec_work_name" value="{{ old('crec_work_name', '') }}">
                @if($errors->has('crec_work_name'))
                    <span class="text-danger">{{ $errors->first('crec_work_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_work_name_helper') }}</span>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
            </div>
             <!--نهاية التكرار-->

            
            
            
            
                       <!--بداية التكرار2-->
            <div class="card mt-2 border border-dark p-2">
                    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.crec-reg-requests.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.crecRegRequest.title_singular') }}
            </a>
        </div>
    </div>
                
                
                <h6 class="card-header">        {{ trans('global.create') }} {{ trans('cruds.crecRegPerson.title_singular') }}
                 </h6> 
                
                
                
                
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label class="required" for="person_id_no">{{ trans('cruds.crecRegPerson.fields.person_id_no') }}
                            <span class="text-danger">*</span>
                            
                            </label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('person_id_no') ? 'is-invalid' : '' }}" type="text" name="person_id_no" id="person_id_no" value="{{ old('person_id_no', '') }}" required>
                @if($errors->has('person_id_no'))
                    <span class="text-danger">{{ $errors->first('person_id_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_id_no_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="person_type">{{ trans('cruds.crecRegPerson.fields.person_type') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('person_type') ? 'is-invalid' : '' }}" type="text" name="person_type" id="person_type" value="{{ old('person_type', '') }}">
                @if($errors->has('person_type'))
                    <span class="text-danger">{{ $errors->first('person_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_type_helper') }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label class="required" for="person_name_a">{{ trans('cruds.crecRegPerson.fields.person_name_a') }}
                            <span class="text-danger">*</span>
                            </label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('person_name_a') ? 'is-invalid' : '' }}" type="text" name="person_name_a" id="person_name_a" value="{{ old('person_name_a', '') }}" required>
                @if($errors->has('person_name_a'))
                    <span class="text-danger">{{ $errors->first('person_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_name_a_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="person_name_l">{{ trans('cruds.crecRegPerson.fields.person_name_l') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('person_name_l') ? 'is-invalid' : '' }}" type="text" name="person_name_l" id="person_name_l" value="{{ old('person_name_l', '') }}">
                @if($errors->has('person_name_l'))
                    <span class="text-danger">{{ $errors->first('person_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_name_l_helper') }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label for="person_birth_date">{{ trans('cruds.crecRegPerson.fields.person_birth_date') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control date {{ $errors->has('person_birth_date') ? 'is-invalid' : '' }}" type="text" name="person_birth_date" id="person_birth_date" value="{{ old('person_birth_date') }}">
                @if($errors->has('person_birth_date'))
                    <span class="text-danger">{{ $errors->first('person_birth_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_birth_date_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="person_birth_place">{{ trans('cruds.crecRegPerson.fields.person_birth_place') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('person_birth_place') ? 'is-invalid' : '' }}" type="text" name="person_birth_place" id="person_birth_place" value="{{ old('person_birth_place', '') }}">
                @if($errors->has('person_birth_place'))
                    <span class="text-danger">{{ $errors->first('person_birth_place') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_birth_place_helper') }}</span>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label for="person_gender">{{ trans('cruds.crecRegPerson.fields.person_gender') }}</label>
                        </div>
                        <div class="col-md-4">
                                            <input class="form-control {{ $errors->has('person_gender') ? 'is-invalid' : '' }}" type="text" name="person_gender" id="person_gender" value="{{ old('person_gender', '') }}">
                @if($errors->has('person_gender'))
                    <span class="text-danger">{{ $errors->first('person_gender') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_gender_helper') }}</span>

                        </div>
                        <div class="col-md-2">
                <label for="person_nationality_id">{{ trans('cruds.crecRegPerson.fields.person_nationality') }}</label>
                        </div>
                        <div class="col-md-4">
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
                    </div>
                    
                    
                   <div class="row mb-3">
                        <div class="col-md-2">
 <label for="country_id">{{ trans('cruds.crecRegPerson.fields.country') }}</label>                        </div>
                        <div class="col-md-4">
   <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id_reg" id="country_id_reg">
                    @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>                                @if($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.country_helper') }}</span>


                        </div>
                        <div class="col-md-2">
                <label for="governorate_id">{{ trans('cruds.crecRegPerson.fields.governorate') }}</label>
                        </div>
                        <div class="col-md-4">
                <select class="form-control select2 {{ $errors->has('governorate') ? 'is-invalid' : '' }}" name="governorate_id_reg" id="governorate_id_reg">
                    @foreach($governorates as $id => $entry)
                        <option value="{{ $id }}" {{ old('governorate_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('governorate'))
                    <span class="text-danger">{{ $errors->first('governorate') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.governorate_helper') }}</span>
                        </div>
                    </div>     
                    
                    
                    
                    <div class="row mb-3">
                        <div class="col-md-2">
                 <label for="city_id">{{ trans('cruds.crecRegPerson.fields.city') }}</label>
                        </div>
                        <div class="col-md-4">
                <select class="form-control select2 {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id_reg" id="city_id_reg">
                    @foreach($cities as $id => $entry)
                        <option value="{{ $id }}" {{ old('city_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.city_helper') }}</span>


                        </div>
                        <div class="col-md-2">
                <label class="required" for="person_type_id">{{ trans('cruds.crecRegPerson.fields.person_type') }}</label>
                        </div>
                        <div class="col-md-4">
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
                    </div>        
                    
                    
                    
                    
                    
                    
                    
                      <div class="row mb-3">
                        <div class="col-md-2">
                <label for="person_address_a">{{ trans('cruds.crecRegPerson.fields.person_address_a') }}</label>
                        </div>
                        <div class="col-md-4">
                                            <input class="form-control {{ $errors->has('person_address_a') ? 'is-invalid' : '' }}" type="text" name="person_address_a" id="person_address_a" value="{{ old('person_address_a', '') }}">
                @if($errors->has('person_address_a'))
                    <span class="text-danger">{{ $errors->first('person_address_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_address_a_helper') }}</span>

                        </div>
                        <div class="col-md-2">
                <label for="person_address_l">{{ trans('cruds.crecRegPerson.fields.person_address_l') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('person_address_l') ? 'is-invalid' : '' }}" type="text" name="person_address_l" id="person_address_l" value="{{ old('person_address_l', '') }}">
                @if($errors->has('person_address_l'))
                    <span class="text-danger">{{ $errors->first('person_address_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_address_l_helper') }}</span>
                        </div>
                    </div>  <div class="row mb-3">
                        <div class="col-md-2">
                <label for="person_street">{{ trans('cruds.crecRegPerson.fields.person_street') }}</label>
                        </div>
                        <div class="col-md-4">
                                           <input class="form-control {{ $errors->has('person_street') ? 'is-invalid' : '' }}" type="text" name="person_street" id="person_street" value="{{ old('person_street', '') }}">
                @if($errors->has('person_street'))
                    <span class="text-danger">{{ $errors->first('person_street') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_street_helper') }}</span>

                        </div>
                        <div class="col-md-2">
                <label for="person_bldg_no">{{ trans('cruds.crecRegPerson.fields.person_bldg_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('person_bldg_no') ? 'is-invalid' : '' }}" type="text" name="person_bldg_no" id="person_bldg_no" value="{{ old('person_bldg_no', '') }}">
                @if($errors->has('person_bldg_no'))
                    <span class="text-danger">{{ $errors->first('person_bldg_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_bldg_no_helper') }}</span>
                        </div>
                    </div>  <div class="row mb-3">
                        <div class="col-md-2">
                <label for="person_tel_no">{{ trans('cruds.crecRegPerson.fields.person_tel_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('person_tel_no') ? 'is-invalid' : '' }}" type="text" name="person_tel_no" id="person_tel_no" value="{{ old('person_tel_no', '') }}">
                @if($errors->has('person_tel_no'))
                    <span class="text-danger">{{ $errors->first('person_tel_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_tel_no_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="person_fax_no">{{ trans('cruds.crecRegPerson.fields.person_fax_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('person_fax_no') ? 'is-invalid' : '' }}" type="text" name="person_fax_no" id="person_fax_no" value="{{ old('person_fax_no', '') }}">
                @if($errors->has('person_fax_no'))
                    <span class="text-danger">{{ $errors->first('person_fax_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_fax_no_helper') }}</span>
                        </div>
                    </div>  <div class="row mb-3">
                        <div class="col-md-2">
                <label for="person_mobile_no">{{ trans('cruds.crecRegPerson.fields.person_mobile_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('person_mobile_no') ? 'is-invalid' : '' }}" type="text" name="person_mobile_no" id="person_mobile_no" value="{{ old('person_mobile_no', '') }}">
                @if($errors->has('person_mobile_no'))
                    <span class="text-danger">{{ $errors->first('person_mobile_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_mobile_no_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="person_po_box">{{ trans('cruds.crecRegPerson.fields.person_po_box') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('person_po_box') ? 'is-invalid' : '' }}" type="text" name="person_po_box" id="person_po_box" value="{{ old('person_po_box', '') }}">
                @if($errors->has('person_po_box'))
                    <span class="text-danger">{{ $errors->first('person_po_box') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_po_box_helper') }}</span>
                        </div>
                    </div>  <div class="row mb-3">
                        <div class="col-md-2">
                <label for="person_email">{{ trans('cruds.crecRegPerson.fields.person_email') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('person_email') ? 'is-invalid' : '' }}" type="text" name="person_email" id="person_email" value="{{ old('person_email', '') }}">
                @if($errors->has('person_email'))
                    <span class="text-danger">{{ $errors->first('person_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_email_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="person_notes">{{ trans('cruds.crecRegPerson.fields.person_notes') }}</label>
                        </div>
                        <div class="col-md-4">
                                           <input class="form-control {{ $errors->has('person_notes') ? 'is-invalid' : '' }}" type="text" name="person_notes" id="person_notes" value="{{ old('person_notes', '') }}">
                @if($errors->has('person_notes'))
                    <span class="text-danger">{{ $errors->first('person_notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_notes_helper') }}</span>

                        </div>
                    </div>
                    
<!--
                   <div class="row mb-3">
                        <div class="col-md-2">
                <label for="deleg_address_a">{{ trans('cruds.crecRegPerson.fields.deleg_address_a') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('deleg_address_a') ? 'is-invalid' : '' }}" type="text" name="deleg_address_a" id="deleg_address_a" value="{{ old('deleg_address_a', '') }}">
                @if($errors->has('deleg_address_a'))
                    <span class="text-danger">{{ $errors->first('deleg_address_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.deleg_address_a_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="deleg_address_l">{{ trans('cruds.crecRegPerson.fields.deleg_address_l') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('deleg_address_l') ? 'is-invalid' : '' }}" type="text" name="deleg_address_l" id="deleg_address_l" value="{{ old('deleg_address_l', '') }}">
                @if($errors->has('deleg_address_l'))
                    <span class="text-danger">{{ $errors->first('deleg_address_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.deleg_address_l_helper') }}</span>
                        </div>
                    </div> 
-->
                    
                    
                    
<!--
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label for="deleg_street">{{ trans('cruds.crecRegPerson.fields.deleg_street') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('deleg_street') ? 'is-invalid' : '' }}" type="text" name="deleg_street" id="deleg_street" value="{{ old('deleg_street', '') }}">
                @if($errors->has('deleg_street'))
                    <span class="text-danger">{{ $errors->first('deleg_street') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.deleg_street_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="deleg_bldg_no">{{ trans('cruds.crecRegPerson.fields.deleg_bldg_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('deleg_bldg_no') ? 'is-invalid' : '' }}" type="text" name="deleg_bldg_no" id="deleg_bldg_no" value="{{ old('deleg_bldg_no', '') }}">
                @if($errors->has('deleg_bldg_no'))
                    <span class="text-danger">{{ $errors->first('deleg_bldg_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.deleg_bldg_no_helper') }}</span>
                        </div>
                    </div>
-->
                    
                    
<!--
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label for="deleg_tel_no">{{ trans('cruds.crecRegPerson.fields.deleg_tel_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('deleg_tel_no') ? 'is-invalid' : '' }}" type="text" name="deleg_tel_no" id="deleg_tel_no" value="{{ old('deleg_tel_no', '') }}">
                @if($errors->has('deleg_tel_no'))
                    <span class="text-danger">{{ $errors->first('deleg_tel_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.deleg_tel_no_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="deleg_fax_no">{{ trans('cruds.crecRegPerson.fields.deleg_fax_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('deleg_fax_no') ? 'is-invalid' : '' }}" type="text" name="deleg_fax_no" id="deleg_fax_no" value="{{ old('deleg_fax_no', '') }}">
                @if($errors->has('deleg_fax_no'))
                    <span class="text-danger">{{ $errors->first('deleg_fax_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.deleg_fax_no_helper') }}</span>
                        </div>
                    </div>   
-->
                    
<!--
                  <div class="row mb-3">
                        <div class="col-md-2">
                <label for="deleg_mobile_no">{{ trans('cruds.crecRegPerson.fields.deleg_mobile_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('deleg_mobile_no') ? 'is-invalid' : '' }}" type="text" name="deleg_mobile_no" id="deleg_mobile_no" value="{{ old('deleg_mobile_no', '') }}">
                @if($errors->has('deleg_mobile_no'))
                    <span class="text-danger">{{ $errors->first('deleg_mobile_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.deleg_mobile_no_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="deleg_po_box">{{ trans('cruds.crecRegPerson.fields.deleg_po_box') }}</label>
                        </div>
                        <div class="col-md-4">
                                            <input class="form-control {{ $errors->has('deleg_po_box') ? 'is-invalid' : '' }}" type="text" name="deleg_po_box" id="deleg_po_box" value="{{ old('deleg_po_box', '') }}">
                @if($errors->has('deleg_po_box'))
                    <span class="text-danger">{{ $errors->first('deleg_po_box') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.deleg_po_box_helper') }}</span>

                        </div>
                    </div> 
-->
                    
                    
<!--
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label for="deleg_email">{{ trans('cruds.crecRegPerson.fields.deleg_email') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('deleg_email') ? 'is-invalid' : '' }}" type="text" name="deleg_email" id="deleg_email" value="{{ old('deleg_email', '') }}">
                @if($errors->has('deleg_email'))
                    <span class="text-danger">{{ $errors->first('deleg_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.deleg_email_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="deleg_website">{{ trans('cruds.crecRegPerson.fields.deleg_website') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('deleg_website') ? 'is-invalid' : '' }}" type="text" name="deleg_website" id="deleg_website" value="{{ old('deleg_website', '') }}">
                @if($errors->has('deleg_website'))
                    <span class="text-danger">{{ $errors->first('deleg_website') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.deleg_website_helper') }}</span>
                        </div>
                    </div>   
-->
                    
                    
                    
                    
                    
                    
                    
                </div>
            </div>
             <!--نهاية التكرا2ر-->
 
            
            
            
            
                        <!--بداية التكرار3-->
            <div class="card mt-2 border border-dark p-2">
                <h6 class="card-header">        {{ trans('global.create') }} {{ trans('cruds.crecRegBranch.title_singular') }}
</h6>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label for="branch_no">{{ trans('cruds.crecRegBranch.fields.branch_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('branch_no') ? 'is-invalid' : '' }}" type="number" name="branch_no" id="branch_no" value="{{ old('branch_no', '') }}" step="1">
                @if($errors->has('branch_no'))
                    <span class="text-danger">{{ $errors->first('branch_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_no_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="branch_brand_name">{{ trans('cruds.crecRegBranch.fields.branch_brand_name') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('branch_brand_name') ? 'is-invalid' : '' }}" type="text" name="branch_brand_name" id="branch_brand_name" value="{{ old('branch_brand_name', '') }}">
                @if($errors->has('branch_brand_name'))
                    <span class="text-danger">{{ $errors->first('branch_brand_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_brand_name_helper') }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label for="branch_open_date">{{ trans('cruds.crecRegBranch.fields.branch_open_date') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control date {{ $errors->has('branch_open_date') ? 'is-invalid' : '' }}" type="text" name="branch_open_date" id="branch_open_date" value="{{ old('branch_open_date') }}">
                @if($errors->has('branch_open_date'))
                    <span class="text-danger">{{ $errors->first('branch_open_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_open_date_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="branch_address_a">{{ trans('cruds.crecRegBranch.fields.branch_address_a') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('branch_address_a') ? 'is-invalid' : '' }}" type="text" name="branch_address_a" id="branch_address_a" value="{{ old('branch_address_a', '') }}">
                @if($errors->has('branch_address_a'))
                    <span class="text-danger">{{ $errors->first('branch_address_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_address_a_helper') }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label for="branch_address_l">{{ trans('cruds.crecRegBranch.fields.branch_address_l') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('branch_address_l') ? 'is-invalid' : '' }}" type="text" name="branch_address_l" id="branch_address_l" value="{{ old('branch_address_l', '') }}">
                @if($errors->has('branch_address_l'))
                    <span class="text-danger">{{ $errors->first('branch_address_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_address_l_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="branch_street">{{ trans('cruds.crecRegBranch.fields.branch_street') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('branch_street') ? 'is-invalid' : '' }}" type="text" name="branch_street" id="branch_street" value="{{ old('branch_street', '') }}">
                @if($errors->has('branch_street'))
                    <span class="text-danger">{{ $errors->first('branch_street') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_street_helper') }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label for="branch_bldg_no">{{ trans('cruds.crecRegBranch.fields.branch_bldg_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('branch_bldg_no') ? 'is-invalid' : '' }}" type="text" name="branch_bldg_no" id="branch_bldg_no" value="{{ old('branch_bldg_no', '') }}">
                @if($errors->has('branch_bldg_no'))
                    <span class="text-danger">{{ $errors->first('branch_bldg_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_bldg_no_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="branch_tel_no">{{ trans('cruds.crecRegBranch.fields.branch_tel_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('branch_tel_no') ? 'is-invalid' : '' }}" type="text" name="branch_tel_no" id="branch_tel_no" value="{{ old('branch_tel_no', '') }}">
                @if($errors->has('branch_tel_no'))
                    <span class="text-danger">{{ $errors->first('branch_tel_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_tel_no_helper') }}</span>
                        </div>
                    </div>
                    
                    
                     <div class="row mb-3">
                        <div class="col-md-2">
                <label for="branch_fax_no">{{ trans('cruds.crecRegBranch.fields.branch_fax_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('branch_fax_no') ? 'is-invalid' : '' }}" type="text" name="branch_fax_no" id="branch_fax_no" value="{{ old('branch_fax_no', '') }}">
                @if($errors->has('branch_fax_no'))
                    <span class="text-danger">{{ $errors->first('branch_fax_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_fax_no_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="branch_mobile_no">{{ trans('cruds.crecRegBranch.fields.branch_mobile_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('branch_mobile_no') ? 'is-invalid' : '' }}" type="text" name="branch_mobile_no" id="branch_mobile_no" value="{{ old('branch_mobile_no', '') }}">
                @if($errors->has('branch_mobile_no'))
                    <span class="text-danger">{{ $errors->first('branch_mobile_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_mobile_no_helper') }}</span>
                        </div>
                    </div> <div class="row mb-3">
                        <div class="col-md-2">
                <label for="branch_po_box">{{ trans('cruds.crecRegBranch.fields.branch_po_box') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('branch_po_box') ? 'is-invalid' : '' }}" type="text" name="branch_po_box" id="branch_po_box" value="{{ old('branch_po_box', '') }}">
                @if($errors->has('branch_po_box'))
                    <span class="text-danger">{{ $errors->first('branch_po_box') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_po_box_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="branch_email">{{ trans('cruds.crecRegBranch.fields.branch_email') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('branch_email') ? 'is-invalid' : '' }}" type="text" name="branch_email" id="branch_email" value="{{ old('branch_email', '') }}">
                @if($errors->has('branch_email'))
                    <span class="text-danger">{{ $errors->first('branch_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_email_helper') }}</span>
                        </div>
                    </div> <div class="row mb-3">
                        <div class="col-md-2">
                <label for="branch_website">{{ trans('cruds.crecRegBranch.fields.branch_website') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('branch_website') ? 'is-invalid' : '' }}" type="text" name="branch_website" id="branch_website" value="{{ old('branch_website', '') }}">
                @if($errors->has('branch_website'))
                    <span class="text-danger">{{ $errors->first('branch_website') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_website_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="branch_contact_person">{{ trans('cruds.crecRegBranch.fields.branch_contact_person') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('branch_contact_person') ? 'is-invalid' : '' }}" type="text" name="branch_contact_person" id="branch_contact_person" value="{{ old('branch_contact_person', '') }}">
                @if($errors->has('branch_contact_person'))
                    <span class="text-danger">{{ $errors->first('branch_contact_person') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegBranch.fields.branch_contact_person_helper') }}</span>
                        </div>
                    </div> <div class="row mb-3">
                        <div class="col-md-2">
                <label for="branch_work_class_id">{{ trans('cruds.crecRegBranch.fields.branch_work_class') }}</label>
                        </div>
                        <div class="col-md-4">
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
                     </div>
                 </div>
            </div>
             <!--نهاية التكرا3ر-->

            
            
                        <!--بداية التكرا4ر-->
            <div class="card mt-2 border border-dark p-2">
                <h6 class="card-header">        {{ trans('global.create') }} {{ trans('cruds.crecRegDoc.title_singular') }}
</h6>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label class="required" for="neededdoc_id">{{ trans('cruds.crecRegDoc.fields.neededdoc') }}
                            
                            <span class="text-danger">*</span>
                            </label>
                        </div>
                        <div class="col-md-4">
                                           <select class="form-control select2 {{ $errors->has('neededdoc') ? 'is-invalid' : '' }}" name="neededdoc_id" id="neededdoc_id" required>
                    @foreach($neededdocs as $id => $entry)
                        <option value="{{ $id }}" {{ old('neededdoc_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('neededdoc'))
                    <span class="text-danger">{{ $errors->first('neededdoc') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegDoc.fields.neededdoc_helper') }}</span>

                        </div>
                        <div class="col-md-2">
                <label for="docs_date">{{ trans('cruds.crecRegDoc.fields.docs_date') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control date {{ $errors->has('docs_date') ? 'is-invalid' : '' }}" type="text" name="docs_date" id="docs_date" value="{{ old('docs_date') }}">
                @if($errors->has('docs_date'))
                    <span class="text-danger">{{ $errors->first('docs_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegDoc.fields.docs_date_helper') }}</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label for="docs_ref_code">{{ trans('cruds.crecRegDoc.fields.docs_ref_code') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('docs_ref_code') ? 'is-invalid' : '' }}" type="text" name="docs_ref_code" id="docs_ref_code" value="{{ old('docs_ref_code', '') }}">
                @if($errors->has('docs_ref_code'))
                    <span class="text-danger">{{ $errors->first('docs_ref_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegDoc.fields.docs_ref_code_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="doc_file">{{ trans('cruds.crecRegDoc.fields.doc_file') }}</label>
                        </div>
                        <div class="col-md-4">
                 <input class="form-control {{ $errors->has('doc_file') ? 'is-invalid' : '' }}" type="file" name="doc_file" id="doc_file" value="{{ old('doc_file', '') }}">
                @if($errors->has('doc_file'))
                    <span class="text-danger">{{ $errors->first('doc_file') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegDoc.fields.doc_file_helper') }}</span>
                        </div>
                    </div>
                 
              
                </div>
            </div>
             <!--نهاية التكرار4-->

            
            
            
            
             
            
            
            
            
            
            
            
            
            
            
            
       
            
            
            
                
                
                
                
            <div class="form-group">
                <button class="btn btn-danger" type="submit" name="save" value="save">
                    {{ trans('global.save') }}
                </button>
            </div>
            
            
               {{--<div class="form-group">
                <button   class="btn btn-success" type="submit" name="save_edit" value="save_edit">
                   {{ trans('global.save_edit') }}
                </button>
            </div> --}}
            
            
        </form>
        
        
     
        
        
    </div>
</div>



@endsection