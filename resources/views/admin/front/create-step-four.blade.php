@extends('layouts.admin1')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.crecRegRequest.title_singular') }}
    </div>

    <div class="card-body">
        <div class="row">
            <hr style="width: 100%;display: block;position: absolute;margin: 2%"/>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" class="bg-success" style="display: inline-block;padding: 1rem;text-align: center;line-height: 1.4rem;border: 1px solid black;border-radius: 50%;">
                        <span style="display: none">1</span>
                        <i class="fas fa-check"></i>
                    </a>
                    <span style="display: block;">معلومات الشخصية</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" class="bg-success" style="display: inline-block;;padding: 1rem;text-align: center;line-height: 1.4rem;border: 1px solid black;border-radius: 50%;">
                        <span style="display: none">2</span>
                        <i class="fas fa-check"></i>
                    </a>
                    <span style="display: block">إضافة وكيل</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" class="bg-success" style="display: inline-block;;padding: 1rem;text-align: center;line-height: 1.4rem;border: 1px solid black;border-radius: 50%;">
                        <span style="display: none">3</span>
                        <i class="fas fa-check"></i>
                    </a>
                    <span style="display: block">ملفات المطلوبة</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" class="bg-warning" style="display: inline-block;;padding: 1rem;text-align: center;line-height: 1.4rem;border: 1px solid black;border-radius: 50%;">
                        <span style="padding: 0.3rem;">4</span>
                    </a>
                    <span style="display: block">تأكيد المعلومات</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" style="background-color:#f1f6fb;display: inline-block;;padding: 1rem;text-align: center;line-height: 1.4rem;border-radius: 50%;">
                        <span style="padding: 0.3rem;">5</span>
                    </a>
                    <span style="display: block">طباعة أمر التحصيل</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" style="background-color:#f1f6fb;display: inline-block;;padding: 1rem;text-align: center;line-height: 1.4rem;border-radius: 50%;">
                        <span style="padding: 0.3rem;">6</span>
                    </a>
                    <span style="display: block">إعتماد الطلب و إرفاق إيصال الدفع</span>
                </div>
            </div>
        </div>
        <br>
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
                <input readonly class="form-control {{ $errors->has('crec_code') ? 'is-invalid' : '' }}" type="text" name="crec_code" id="crec_code" value="{{ $crecRegRequest->crec_code   }}">
                 @if($errors->has('crec_code'))
                    <span class="text-danger">{{ $errors->first('crec_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_code_helper') }}</span>

                        </div>
                        <div class="col-md-2">
                          <label for="crec_appl_no">{{ trans('cruds.crecRegRequest.fields.crec_appl_no') }}</label>

                        </div>
                        <div class="col-md-4">
                <input readonly class="form-control {{ $errors->has('crec_appl_no') ? 'is-invalid' : '' }}" type="text" name="crec_appl_no" id="crec_appl_no" value="{{ $crecRegRequest->crec_appl_no }}" >
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
                            
                            
            <input class="form-control date {{ $errors->has('crec_appl_date') ? 'is-invalid' : '' }}" type="text" name="crec_appl_date" id="crec_appl_date" value="{{ $crecRegRequest->crec_appl_date }}"  required>
                            
                            
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
                                           <input class="form-control {{ $errors->has('crec_register_no') ? 'is-invalid' : '' }}" type="text" name="crec_register_no" id="crec_register_no" value="{{ $crecRegRequest->crec_register_no }}" required>
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
                  <input readonly class="form-control {{ $errors->has('crec_comp_name_a') ? 'is-invalid' : '' }}" type="text" name="crec_comp_name_a" id="crec_comp_name_a" value="{{ $crecRegRequest->crec_comp_name_a }}" required>
                @if($errors->has('crec_comp_name_a'))
                    <span class="text-danger">{{ $errors->first('crec_comp_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_a_helper') }}</span>

                        </div>
                        <div class="col-md-2">
                <label for="crec_comp_name_l">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_l') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_comp_name_l') ? 'is-invalid' : '' }}" type="text" name="crec_comp_name_l" id="crec_comp_name_l" value="{{ $crecRegRequest->crec_comp_name_l }}">
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
                <input class="form-control {{ $errors->has('crec_comp_name_h') ? 'is-invalid' : '' }}" type="text" name="crec_comp_name_h" id="crec_comp_name_h" value="{{ $crecRegRequest->crec_comp_name_h }}">
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
                <input class="form-control date {{ $errors->has('crec_start_date') ? 'is-invalid' : '' }}" type="text" name="crec_start_date" id="crec_start_date"  value="{{ $crecRegRequest->crec_start_date }}" >
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
            <input class="form-control {{ $errors->has('crec_brand_name') ? 'is-invalid' : '' }}" type="text" name="crec_brand_name" id="crec_brand_name" value="{{ $crecRegRequest->crec_brand_name }}">
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
              <input name="country_id" value="{{ $crecRegRequest->country->id }}" type="hidden" class="form-control">
              <input value="{{ $crecRegRequest->country->country_name_a }}" type="text" class="form-control">

                {{--<select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id" required>
                    @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>--}}
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
                 {{--<input name="governorate_id" value="{{ $crecRegRequest->governorate->id ?? '' }}" type="hidden" class="form-control">--}}
                 <input name="governorate_id" value="{{ $crecRegRequest->governorate_id ?? '' }}" type="hidden" class="form-control">
                 {{--<input value="{{ $crecRegRequest->governorate->governorate_name_a ?? '' }}" type="text" class="form-control">--}}
      <input value="<?php
                                $coun = App\Models\ComGovernorate::where('region_cd',$crecRegRequest->governorate_id)->first();
                              
                                    if($coun != null)
                                {
                                      echo $coun->governorate_name_a;
                                }
                                ?>" type="text" class="form-control">
                            
                            
                {{--<select class="form-control select2 {{ $errors->has('governorate') ? 'is-invalid' : '' }}" name="governorate_id" id="governorate_id">
                    @foreach($governorates as $id => $entry)
                        <option value="{{ $id }}" {{ old('governorate_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>--}}
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
                            
             {{--<input name="city_id"  value="{{ $crecRegRequest->city->id }}" type="hidden" class="form-control">--}}
             <input name="city_id"  value="{{ $crecRegRequest->city_id }}" type="hidden" class="form-control">
             {{--<input value="{{ $crecRegRequest->city->city_name_a }}" type="text" class="form-control">--}}
              <input value="<?php
                                $coun = App\Models\ComCity::where('city_cd',$crecRegRequest->city_id)->first();
                                     if($coun != null)
                                {
                                      echo $coun->city_name_a;
                                }?>" type="text" class="form-control">
               
                            
                {{--<select class="form-control select2 {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id" id="city_id" required>
                    @foreach($cities as $id => $entry)
                        <option value="{{ $id }}" {{ old('city_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>--}}
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
                <input class="form-control {{ $errors->has('crec_address_a') ? 'is-invalid' : '' }}" type="text" name="crec_address_a" id="crec_address_a" value="{{ $crecRegRequest->crec_address_a }}">
                @if($errors->has('crec_address_a'))
                    <span class="text-danger">{{ $errors->first('crec_address_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_address_a_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_address_l">{{ trans('cruds.crecRegRequest.fields.crec_address_l') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_address_l') ? 'is-invalid' : '' }}" type="text" name="crec_address_l" id="crec_address_l" value="{{ $crecRegRequest->crec_address_l }}">
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
                <input class="form-control {{ $errors->has('crec_street') ? 'is-invalid' : '' }}" type="text" name="crec_street" id="crec_street" value="{{ $crecRegRequest->crec_street }}">
                @if($errors->has('crec_street'))
                    <span class="text-danger">{{ $errors->first('crec_street') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_street_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_bldg_no">{{ trans('cruds.crecRegRequest.fields.crec_bldg_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_bldg_no') ? 'is-invalid' : '' }}" type="text" name="crec_bldg_no" id="crec_bldg_no" value="{{ $crecRegRequest->crec_bldg_no }}">
                @if($errors->has('crec_bldg_no'))
                    <span class="text-danger">{{ $errors->first('crec_bldg_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_bldg_no_helper') }}</span>
                        </div>
                    </div> 
                    
                    
                
                    
                    
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label for="crec_mobile_no">{{ trans('cruds.crecRegRequest.fields.crec_mobile_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_mobile_no') ? 'is-invalid' : '' }}" type="text" name="crec_mobile_no" id="crec_mobile_no" value="{{ $crecRegRequest->crec_mobile_no }}">
                @if($errors->has('crec_mobile_no'))
                    <span class="text-danger">{{ $errors->first('crec_mobile_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_mobile_no_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_po_box">{{ trans('cruds.crecRegRequest.fields.crec_po_box') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_po_box') ? 'is-invalid' : '' }}" type="text" name="crec_po_box" id="crec_po_box" value="{{ $crecRegRequest->crec_po_box }}">
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
                <input readonly class="form-control {{ $errors->has('crec_applicant_id_no') ? 'is-invalid' : '' }}" type="text" name="crec_applicant_id_no" id="crec_applicant_id_no" value="{{ $crecRegRequest->crec_applicant_id_no }}" required>
                @if($errors->has('crec_applicant_id_no'))
                    <span class="text-danger">{{ $errors->first('crec_applicant_id_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_applicant_id_no_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_applicant_name">{{ trans('cruds.crecRegRequest.fields.crec_applicant_name') }}</label>
                        </div>
                        <div class="col-md-4">
                <input readonly class="form-control {{ $errors->has('crec_applicant_name') ? 'is-invalid' : '' }}" type="text" name="crec_applicant_name" id="crec_applicant_name" value="{{ $crecRegRequest->crec_applicant_name }}">
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
                <label for="crec_work_class_id"> {{ trans('cruds.crecRegRequest.fields.crec_work_class') }}</label>
                        </div>
                        <div class="col-md-4">
                                            {{--<select class="form-control select2 {{ $errors->has('crec_work_class') ? 'is-invalid' : '' }}" name="crec_work_class_id" id="crec_work_class_id">
                    @foreach($crec_work_classes as $id => $entry)
                        <option value="{{ $id }}" {{ old('crec_work_class_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>--}}
                <input value=" {{ $crecRegRequest->crec_work_class->work_class_desc_a ?? '' }}" type="text" class="form-control">
                <input name="crec_work_class_id" value=" {{ $crecRegRequest->crec_work_class_id ?? '' }}" type="hidden" class="form-control">
           
                            
                            
                @if($errors->has('crec_work_class'))
                    <span class="text-danger">{{ $errors->first('crec_work_class') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_work_class_helper') }}</span>

                        </div>
                        <div class="col-md-2">
                <label for="crec_work_name">{{ trans('cruds.crecRegRequest.fields.crec_work_name') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_work_name') ? 'is-invalid' : '' }}" type="text" name="crec_work_name" id="crec_work_name" value="{{ $crecRegRequest->crec_work_name }}">
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
            
                                   <!--بداية التكرار22-->
            {{--@foreach($crecRegPeoples as  $crecRegPerson)--}}
            <div class="card mt-2 border border-dark p-2">
                <h6 class="card-header"> {{ trans('global.show') }} {{ trans('cruds.crecRegPerson.title') }}</h6>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegPerson.fields.crec_reg_request') }} </label>
                        </div>
                        <div class="col-md-4">
<!--                            <input value="{{ $crecRegPerson->crec_reg_request->crec_comp_name_a ?? '' }}"   type="text" class="form-control">-->
                            <input value="{{ $crecRegRequest->crec_comp_name_a }}"   type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegPerson.fields.person_id_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input name="person_id_no" value="{{ $crecRegPerson->person_id_no }}"  type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegPerson.fields.person_type') }}</label>
                        </div>
          <div class="col-md-4">
                     <input name="person_type_name_a" value=" {{ $crecRegPerson->person_type->person_type_name_a }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>{{ trans('cruds.crecRegPerson.fields.person_name_a') }}</label>
                        </div>
             <div class="col-md-4">
                            <input name="person_name_a" value="{{ $crecRegPerson->person_name_a }}"  type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_name_l') }}
                            </label>
                        </div>
                        <div class="col-md-4">
                            <input name="person_name_l" value=" {{ $crecRegPerson->person_name_l }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegPerson.fields.person_birth_date') }}
                            </label>
                        </div>
                        <div class="col-md-4">
                            <input name="person_birth_date" value="{{ $crecRegPerson->person_birth_date }}"  type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_birth_place') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input name="person_birth_place" value=" {{ $crecRegPerson->person_birth_place }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_gender') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input name="person_gender" value="{{ $crecRegPerson->person_gender }}"  type="text" class="form-control">

                        </div>
                    </div> 
                    
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegPerson.fields.person_nationality') }}</label>
                        </div>
      <div class="col-md-4">
                       <input name="nationality_a" value="{{ $crecRegPerson->person_nationality->country_name_a ?? '' }}"  type="text" class="form-control">
                       <input name="person_nationality_id" value="{{ $crecRegPerson->person_nationality_id ?? '' }}"  type="hidden" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.country') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                            
                    <input name="country_name_a" value="<?php
$coun = App\Models\ComCountry::where('id',$crecRegPerson->country_id)->first();

if($coun != null)
{
echo $coun->country_name_a;
}
?>"  type="text" class="form-control">
                         {{--<input name="country_name_a" value="{{ $crecRegPerson->country->country_name_a ?? '' }}"  type="text" class="form-control">--}}
                         <input name="country_id_reg" value="{{ $crecRegPerson->country_id ?? '' }}"  type="hidden" class="form-control">

                        </div>
                    </div>   <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.governorate') }}</label>
                        </div>
           <div class="col-md-4">
                            <input name="governorate_name_a" value="<?php
$coun = App\Models\ComGovernorate::where('region_cd',$crecRegPerson->governorate_id)->first();

if($coun != null)
{
echo $coun->governorate_name_a;
}
?> "  type="text" class="form-control">
                             {{--<input name="governorate_name_a" value="{{ $crecRegPerson->governorate->governorate_name_a ?? '' }}"  type="text" class="form-control">--}}
                            <input name="governorate_id_reg" value="{{ $crecRegPerson->governorate_id ?? '' }}"  type="hidden" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.city') }}
                                 </label>
                        </div>
            <div class="col-md-4">
                <input name="city_name_a" value="<?php
$coun = App\Models\ComCity::where('city_cd',$crecRegPerson->city_id)->first();
if($coun != null)
{
echo $coun->city_name_a;
}?>"  type="text" class="form-control">
                         {{--<input name="city_name_a" value=" {{ $crecRegPerson->city->city_name_a ?? '' }}"  type="text" class="form-control">--}}
                         <input name="city_id_reg" value=" {{ $crecRegPerson->city_id ?? '' }}"  type="hidden" class="form-control">

                        </div>
                    </div>   <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_address_a') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input name="person_address_a" value=" {{ $crecRegPerson->person_address_a }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_address_l') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input name="person_address_l" value="{{ $crecRegPerson->person_address_l }}"  type="text" class="form-control">

                        </div>
                    </div>   <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_street') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input name="person_street" value=" {{ $crecRegPerson->person_street }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_bldg_no') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input name="person_bldg_no" value="{{ $crecRegPerson->person_bldg_no }}"  type="text" class="form-control">

                        </div>
                    </div>   <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_tel_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input name="person_tel_no" value=" {{ $crecRegPerson->person_tel_no }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_fax_no') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input name="person_fax_no" value="{{ $crecRegPerson->person_fax_no }}"  type="text" class="form-control">

                        </div> 
                    </div>   <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_mobile_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input name="person_mobile_no" value=" {{ $crecRegPerson->person_mobile_no }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_po_box') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input name="person_po_box" value="{{ $crecRegPerson->person_po_box }}"  type="text" class="form-control">

                        </div>
                    </div>  
                    
                    
 
                    <div class="row mb-3">
                        <div class="col-md-2">
                <label class="required" for="person_type_id">{{ trans('cruds.crecRegPerson.fields.person_type') }}</label>
                        </div>
                        <div class="col-md-4">
                         <input name="person_type_id" value="{{ $crecRegPerson->person_type->id }}"  type="hidden" class="form-control">
                         <input name="" value="{{ $crecRegPerson->person_type->person_type_name_a }}"  type="text" class="form-control">
                        </div>
                        
                        
                    </div>   
 
                    
                     
                </div>
            </div>
            {{--@endforeach--}}

             <!--نهاية التكرار-->
            
                     
             
             <!--نهاية التكرا2ر-->
 
            
            
            
            
    
            
                        <!--بداية التكرار3-->
            
 
             <!--نهاية التكرا3ر-->
            
          
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

            
            
                        <!--بداية التكرا4ر-->
                     
     
            
                       <!--بداية التكرار-->
          <div class="card mt-2 border border-dark p-2">
                <h6 class="card-header">  {{ trans('global.show') }} {{ trans('cruds.crecRegDoc.title') }}</h6>
                <div class="card-body">
                    {{--<div class="row mb-3">
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
                            <input name="neededdoc_id" value=" {{ $crecRegDoc->neededdoc->id ?? '' }}" type="hidden" class="form-control">
                            <input value=" {{ $crecRegDoc->neededdoc->needed_doc_name_a ?? '' }}" type="text" class="form-control">
                        </div>
                    </div>--}}
                      <input name="neededdoc_id" value=" {{ $crecRegDoc->neededdoc->id ?? '' }}" type="hidden" class="form-control">

                    {{--<div class="row mb-3">
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
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegDoc.fields.doc_file') }}
                            </label>
                        </div>
                        
                        @foreach($crecRegDoc->doc_file as $crecRegDo)
<!--                        <div class="col-md-4">-->
                        <input name="doc_file[]" type="hidden" value="{{$crecRegDo}}">
<!--                         <div>-->
                             <a target="_blank" href="/commercial/public/uploads/{{$crecRegDo}}">عرض الملف</a> 
                       <b>||</b>
<!--
                            <br>
                            </div>
-->
                         {{--<a target="_blank" href="asset('/uploads/{{$crecRegDo')}}">عرض الملف</a>  --}}
<!--                         </div>-->
                        @endforeach
                         
                        @foreach($neededdocsid as $neededocsid)
                      <input name="neededdocsid[]" type="hidden" value="{{$neededocsid}}">  
                        @endforeach
                     </div>
                
                </div>
            </div> 
             <!--نهاية التكرار-->
 
            
            
            
            
            
            
 

            
            
            
            
             
            
            
            
            
            
            
            
            
              <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('admin.front.create_step_three') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button class="btn btn-danger" type="submit" name="save" value="save">
                    {{ trans('global.save') }}
                </button>
                            </div>
                        </div>
                    </div> 
            
            
       
            
            
            
                
                
                
                
           {{--<div class="form-group">
                <button class="btn btn-danger" type="submit" name="save" value="save">
                    {{ trans('global.save') }}
                </button>
            </div> --}}
            
            
               {{--<div class="form-group">
                <button   class="btn btn-success" type="submit" name="save_edit" value="save_edit">
                   {{ trans('global.save_edit') }}
                </button>
            </div> --}}
            
            
        </form>
    </div>
</div>



@endsection