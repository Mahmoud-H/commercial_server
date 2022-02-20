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
                    <a href="#" class="bg-warning" style="display: inline-block;padding: 1rem;text-align: center;line-height: 1.4rem;border: 1px solid black;border-radius: 50%;">
                        <span style="padding: 0.3rem;">1</span>
                    </a>
                    <span style="display: block;">المعلومات الشخصية</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" style="background-color:#f1f6fb;display: inline-block;padding: 1rem;text-align: center;line-height: 1.4rem;border-radius: 50%;">
                        <span style="padding: 0.3rem;">2</span>
                    </a>
                    <span style="display: block">إضافة وكيل</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" style="background-color:#f1f6fb;display: inline-block;padding: 1rem;text-align: center;line-height: 1.4rem;border-radius: 50%;">
                        <span style="padding: 0.3rem;">3</span>
                    </a>
                    <span style="display: block">ملفات المطلوبة</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" style="background-color:#f1f6fb;display: inline-block;padding: 1rem;text-align: center;line-height: 1.4rem;border-radius: 50%;">
                        <span style="padding: 0.3rem;">4</span>
                    </a>
                    <span style="display: block">تأكيد المعلومات</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" style="background-color:#f1f6fb;display: inline-block;padding: 1rem;text-align: center;line-height: 1.4rem;border-radius: 50%;">
                        <span style="padding: 0.3rem;">5</span>
                    </a>
                    <span style="display: block">طباعة أمر التحصيل</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" style="background-color:#f1f6fb;display: inline-block;padding: 1rem;text-align: center;line-height: 1.4rem;border-radius: 50%;">
                        <span style="padding: 0.3rem;">6</span>
                    </a>
                    <span style="display: block">إعتماد الطلب و إرفاق إيصال الدفع</span>
                </div>
            </div>
        </div>
        <br>
        <div class="card mt-2 border border-dark p-2">
            <h6 class="card-header">
                {{ trans('global.create') }} {{ trans('cruds.crecRegRequest.title_singular') }}
            </h6>
            <div class="card-body">
                <form method="POST" action="{{ route("admin.front.create_step_one_post") }}" autocomplete="off" enctype="multipart/form-data">
            @csrf    
                        
                    {{--@if(isset($_GET['crecRegRequest']))
                    <input type="text"  value="{{$_GET['crecRegRequest']}}">
                     @endif--}}
                    <div class="row mb-3">
                        <div class="col-md-2">
                  <label for="crec_code"> {{ trans('cruds.crecRegRequest.fields.crec_code') }}</label>

                        </div>
                        <div class="col-md-4">
                <input readonly class="form-control {{ $errors->has('crec_code') ? 'is-invalid' : '' }}" type="text" name="crec_code" id="crec_code" value="{{ $product->crec_code ?? '' }}" >
                 @if($errors->has('crec_code'))
                    <span class="text-danger">{{ $errors->first('crec_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_code_helper') }}</span>

                        </div>
                        <div class="col-md-2">
                          <label for="crec_appl_no">{{ trans('cruds.crecRegRequest.fields.crec_appl_no') }}</label>

                        </div>
                        <div class="col-md-4">
                {{--<input class="form-control {{ $errors->has('crec_appl_no') ? 'is-invalid' : '' }}" type="text" name="crec_appl_no" id="crec_appl_no" value="{{ $product->crec_appl_no ?? '' }}">--}}
                 <input readonly class="form-control {{ $errors->has('crec_appl_no') ? 'is-invalid' : '' }}" type="text" name="crec_appl_no" id="crec_appl_no" value="{{  $userdata['attributes']['UserIdentity'][0]  }}">
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
          <input class="form-control {{ $errors->has('crec_register_no') ? 'is-invalid' : '' }}" type="text" name="crec_register_no" id="crec_register_no" value="{{ $product->crec_register_no ?? '' }}" required>
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
      {{--<input class="form-control {{ $errors->has('crec_comp_name_a') ? 'is-invalid' : '' }}" type="text" name="crec_comp_name_a" id="crec_comp_name_a" value="{{ $product->crec_comp_name_a ?? '' }}" required>--}}
            <input readonly class="form-control {{ $errors->has('crec_comp_name_a') ? 'is-invalid' : '' }}" type="text" name="crec_comp_name_a" id="crec_comp_name_a" value="{{  $userdata['attributes']['Name'][0] }}" required>

                @if($errors->has('crec_comp_name_a'))
                    <span class="text-danger">{{ $errors->first('crec_comp_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_a_helper') }}</span>

                        </div>
                        <div class="col-md-2">
                <label for="crec_comp_name_l">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_l') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_comp_name_l') ? 'is-invalid' : '' }}" type="text" name="crec_comp_name_l" id="crec_comp_name_l" value="{{ $product->crec_comp_name_l ?? '' }}">
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
                <input class="form-control {{ $errors->has('crec_comp_name_h') ? 'is-invalid' : '' }}" type="text" name="crec_comp_name_h" id="crec_comp_name_h" value="{{ $product->crec_comp_name_h ?? '' }}">
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
            <input class="form-control {{ $errors->has('crec_brand_name') ? 'is-invalid' : '' }}" type="text" name="crec_brand_name" id="crec_brand_name" value="{{ $product->crec_brand_name ?? '' }}">
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
                    {{--@foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}> {{ $entry }}</option>
                    @endforeach--}}
                    
                 @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ (old('country_id') ? old('country_id') : $product->country_id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach                    
                    
                    
                    $product->country_id
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
                            {{--<input type="text" name="governorate_id_test" id="governorate_id_test" value="">--}}
                <select class="form-control   {{ $errors->has('governorate') ? 'is-invalid' : '' }}" name="governorate_id" id="governorate_id">
                    {{--@foreach($governorates as $id => $entry)
                        <option value="{{ $id }}" {{ old('governorate_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach--}}
                    
                   @foreach($governorates as $gov)
                        <option value="{{ $gov->region_cd }}" {{ (old('governorate_id') ? old('governorate_id') : $product->governorate_id ?? '') == $gov->region_cd ? 'selected' : '' }}>{{ $gov->governorate_name_a }}</option>
                    @endforeach
     {{--   @foreach($governorates as $gov)
<option value="{{ $gov->region_cd }}" {{ (old('governorate_id') ? old('governorate_id') : $product->governorate_id ?? '') == $gov->region_cd ? 'selected' : '' }}>{{ $gov->governorate_name_a }}</option>
@endforeach--}}

                    
                    
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
                <select class="form-control   {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id" id="city_id" required>
                    {{--@foreach($cities as $id => $entry)
                        <option value="{{ $id }}" {{ old('city_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach--}}
                    
               {{--@foreach($cities as $id => $entry)
                  <option value="{{ $id }}" {{ (old('city_id') ? old('city_id') : $product->city_id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                 @endforeach--}}
                       @foreach($cities as $city)
                        <option value="{{ $city->city_cd }}" {{ (old('city_id') ? old('city_id') : $product->city_id ?? '') == $city->city_cd ? 'selected' : '' }}>{{ $city->city_name_a }}</option>
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
                <input class="form-control {{ $errors->has('crec_address_a') ? 'is-invalid' : '' }}" type="text" name="crec_address_a" id="crec_address_a" value="{{ $product->crec_address_a ?? '' }}">
                @if($errors->has('crec_address_a'))
                    <span class="text-danger">{{ $errors->first('crec_address_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_address_a_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_address_l">{{ trans('cruds.crecRegRequest.fields.crec_address_l') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_address_l') ? 'is-invalid' : '' }}" type="text" name="crec_address_l" id="crec_address_l" value="{{ $product->crec_address_l ?? '' }}">
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
                <input class="form-control {{ $errors->has('crec_street') ? 'is-invalid' : '' }}" type="text" name="crec_street" id="crec_street" value="{{ $product->crec_street ?? '' }}">
                @if($errors->has('crec_street'))
                    <span class="text-danger">{{ $errors->first('crec_street') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_street_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_bldg_no">{{ trans('cruds.crecRegRequest.fields.crec_bldg_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_bldg_no') ? 'is-invalid' : '' }}" type="text" name="crec_bldg_no" id="crec_bldg_no" value="{{ $product->crec_bldg_no ?? '' }}">
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
                <input class="form-control {{ $errors->has('crec_tel_no') ? 'is-invalid' : '' }}" type="text" name="crec_tel_no" id="crec_tel_no" value="{{ $product->name ?? '' }}">
                @if($errors->has('crec_tel_no'))
                    <span class="text-danger">{{ $errors->first('crec_tel_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_tel_no_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_fax_no">{{ trans('cruds.crecRegRequest.fields.crec_fax_no') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_fax_no') ? 'is-invalid' : '' }}" type="text" name="crec_fax_no" id="crec_fax_no" value="{{ $product->name ?? '' }}">
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
                <input class="form-control {{ $errors->has('crec_mobile_no') ? 'is-invalid' : '' }}" type="text" name="crec_mobile_no" id="crec_mobile_no" value="{{ $product->crec_mobile_no ?? '' }}">
                @if($errors->has('crec_mobile_no'))
                    <span class="text-danger">{{ $errors->first('crec_mobile_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_mobile_no_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_po_box">{{ trans('cruds.crecRegRequest.fields.crec_po_box') }}</label>
                        </div>
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('crec_po_box') ? 'is-invalid' : '' }}" type="text" name="crec_po_box" id="crec_po_box" value="{{ $product->crec_po_box ?? '' }}">
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
                {{--<input class="form-control {{ $errors->has('crec_applicant_id_no') ? 'is-invalid' : '' }}" type="text" name="crec_applicant_id_no" id="crec_applicant_id_no" value="{{ $product->crec_applicant_id_no ?? '' }}" required>--}}
                <input readonly class="form-control {{ $errors->has('crec_applicant_id_no') ? 'is-invalid' : '' }}" type="text" name="crec_applicant_id_no" id="crec_applicant_id_no" value="{{  $userdata['attributes']['UserIdentity'][0]  }}" required>
                @if($errors->has('crec_applicant_id_no'))
                    <span class="text-danger">{{ $errors->first('crec_applicant_id_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_applicant_id_no_helper') }}</span>
                        </div>
                        <div class="col-md-2">
                <label for="crec_applicant_name">{{ trans('cruds.crecRegRequest.fields.crec_applicant_name') }}</label>
                        </div>
                        <div class="col-md-4">
                {{--<input class="form-control {{ $errors->has('crec_applicant_name') ? 'is-invalid' : '' }}" type="text" name="crec_applicant_name" id="crec_applicant_name" value="{{ $product->crec_applicant_name ?? '' }}">--}}
                
              <input readonly class="form-control {{ $errors->has('crec_applicant_name') ? 'is-invalid' : '' }}" type="text" name="crec_applicant_name" id="crec_applicant_name" value="{{  $userdata['attributes']['Name'][0] }}">
 
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
                    {{--@foreach($crec_work_classes as $id => $entry)
                        <option value="{{ $id }}" {{ old('crec_work_class_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach--}}
                                                
                  @foreach($crec_work_classes as $id => $entry)
                  <option value="{{ $id }}" {{ (old('crec_work_class_id') ? old('crec_work_class_id') : $product->crec_work_class_id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                <input class="form-control {{ $errors->has('crec_work_name') ? 'is-invalid' : '' }}" type="text" name="crec_work_name" id="crec_work_name" value="{{ $product->crec_work_name ?? '' }}">
                @if($errors->has('crec_work_name'))
                    <span class="text-danger">{{ $errors->first('crec_work_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegRequest.fields.crec_work_name_helper') }}</span>
                        </div>
                    </div>
                    
                    
                    
     <div class="form-group">
<!--
                <button   class="btn btn-success" type="submit" name="save_edit" value="save_edit">
                   {{ trans('global.save') }}
                </button>
-->
         <button   class="btn btn-success" type="submit" name="save_edit" value="save_edit">
                  التالي
                </button>
            </div>               
              </form>      
            </div>
        </div>
    </div>
</div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
              var person_id_no = crec_appl_no.value;
              var city_id = document.querySelector("#city_id");
              var governorate_id = document.querySelector("#governorate_id");
             // alert(person_id_no);
                  $.ajax({
                    url: "/commercial/public/admin/front/create-step-two123_api",
                    type:"POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                      person_id_no:person_id_no,
                     },
                    success:function(response){
                        var obj = response;
                        console.log(obj);
                      //  city_id.value = obj.res2[8];
                     governorate_id.value =  obj.res2[10];//870;//
                    // governorate_id_test.value =  obj.res2[10];
                     city_id.value = obj.res2[11];
                    },
                    error :()=>{
                        xn.value = "";
                         xn.readOnly = false;
                        alert("رقم الهوية خاطئ");
                    }
                  });
  
        });
    </script>

@endsection