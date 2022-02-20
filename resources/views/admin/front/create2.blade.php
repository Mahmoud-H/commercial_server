@extends('layouts.admin1')
@section('content')

 <div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.crecRegRequest.title_singular') }}
    </div>

    <div class="card-body">
        {{--<form method="POST" action="{{ route("admin.front.store") }}" enctype="multipart/form-data">
            @csrf--}}
            
                        <!--بداية التكرار-->
            <div class="card mt-2 border border-dark p-2">
                <h6 class="card-header">        {{ trans('global.create') }} {{ trans('cruds.crecRegRequest.title_singular') }}
</h6>
                <div class="card-body">
                   <form method="POST" action="{{ route("admin.crec-reg-requests.store") }}" autocomplete="off" enctype="multipart/form-data">
            @csrf    
                        
                    {{--@if(isset($_GET['crecRegRequest']))
                    <input type="text"  value="{{$_GET['crecRegRequest']}}">
                     @endif--}}
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
                    
                    
                    
     <div class="form-group">
                <button   class="btn btn-success" type="submit" name="save_edit" value="save_edit">
                   {{ trans('global.save') }}
                </button>
            </div>               
              </form>      
                    
          
                    
                    
                    
                    
                    
                </div>
            </div>
             <!--نهاية التكرار-->

            
            
            
            
                       <!--بداية التكرار2-->
            <div class="card mt-2 border border-dark p-2">
                    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <button class="btn btn-success"   data-toggle="modal" data-target="#myModal">
                {{ trans('global.add') }} {{ trans('cruds.crecRegPerson.title_singular') }}
            </button>
        </div>
    </div>
                 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
<!--          <h4 class="modal-title">Modal Header</h4>-->
        </div>
        <div class="modal-body">
            
            
            
              <form method="POST" action="{{ route("admin.crec-reg-people.store") }}" enctype="multipart/form-data">
            @csrf
                            <div class="card-body">
                    @if(isset($_GET['crecRegRequest']))
                   <input name="crec_reg_request_id" type="hidden" value="{{$_GET['crecRegRequest']}}"> 
                    @endif           
                                
                                
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
               <label for="person_email">{{ trans('cruds.crecRegPerson.fields.person_email') }}</label>
                        </div>
                            <div class="col-md-4">
                <input class="form-control {{ $errors->has('person_email') ? 'is-invalid' : '' }}" type="text" name="person_email" id="person_email" value="{{ old('person_email', '') }}">
                @if($errors->has('person_email'))
                    <span class="text-danger">{{ $errors->first('person_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_email_helper') }}</span>
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
                <label for="person_nationality_id"> {{ trans('cruds.crecRegPerson.fields.person_nationality') }}</label>
                        </div>
                        <div class="col-md-4">
                <select class="form-control   {{ $errors->has('person_nationality') ? 'is-invalid' : '' }}" name="person_nationality_id" id="person_nationality_id">
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
   <select class="form-control   {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id_reg" id="country_id_reg">
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
                <select class="form-control   {{ $errors->has('governorate') ? 'is-invalid' : '' }}" name="governorate_id_reg" id="governorate_id_reg">
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
                <select class="form-control   {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id_reg" id="city_id_reg">
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
                <label class="required" for="person_type_id">{{ trans('cruds.crecRegPerson.fields.person_type') }}
                              <span class="text-danger">*</span>
                            
                            </label>
                        </div>
                        <div class="col-md-4">
                <select class="form-control   {{ $errors->has('person_type') ? 'is-invalid' : '' }}" name="person_type_id" id="person_type_id" required>
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
<!--
                        <div class="col-md-2">
                <label for="person_email">123{{ trans('cruds.crecRegPerson.fields.person_email') }}</label>
                        </div>
-->
<!--
                        <div class="col-md-4">
                <input class="form-control {{ $errors->has('person_email') ? 'is-invalid' : '' }}" type="text" name="person_email" id="person_email" value="{{ old('person_email', '') }}">
                @if($errors->has('person_email'))
                    <span class="text-danger">{{ $errors->first('person_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_email_helper') }}</span>
                        </div>
-->
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
                    
                 </div>
                    <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
             </form>
            
         </div>
                  {{--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> اغلاق</button>
        <button onclick="myFunction()" type="button" class="btn btn-primary"> {{ trans('global.save') }} </button>
      </div> --}}
      </div>
      
    </div>
  </div>
                
                
           <div class="card">
    <div class="card-header">
        {{ trans('cruds.crecRegPerson.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="myTable" class=" table table-bordered table-striped table-hover datatable datatable-CrecRegPerson">
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
                            {{ trans('cruds.crecRegPerson.fields.person_type') }}
                        </th>
<!--
                        <th>
                            &nbsp;
                        </th>
-->
                    </tr>
                </thead>
                <tbody>
                    
                     <?php
                    if(isset($_GET['crecRegRequest'])){
                        
                    
//  $crecRegPeoples = App\Models\CrecRegPerson::where('crec_reg_request_id ',$_GET['crecRegRequest'])->get();
  $crecRegPeoples = App\Models\CrecRegPerson::where('crec_reg_request_id', $_GET['crecRegRequest'])->get();
 // $crecRegPeoples = App\Models\CrecRegPerson::all();
                        
                        }
                     ?>
                    @if(isset($_GET['crecRegRequest']))
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
                                {{ $crecRegPerson->person_type->person_type_name_a ?? '' }}
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
                  @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
 
            </div>
             <!--نهاية التكرا2ر-->
 
            
            
            
            
                        <!--بداية التكرار3-->
            {{--<div class="card mt-2 border border-dark p-2">
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
            </div>--}}
             <!--نهاية التكرا3ر-->

            
            
                        <!--بداية التكرا4ر-->
            <div class="card mt-2 border border-dark p-2">
                <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <button class="btn btn-success"   data-toggle="modal" data-target="#myModalReg">
                {{ trans('global.add') }} {{ trans('cruds.crecRegDoc.title_singular') }}
            </button>
        </div>
    </div>  
                         <!-- Modal -->
  <div class="modal fade" id="myModalReg" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
<!--          <h4 class="modal-title">Modal Header</h4>-->
        </div>
        <div class="modal-body">
                 <form method="POST" action="{{ route("admin.crec-reg-docs.store") }}" enctype="multipart/form-data">
            @csrf
            
            
            
                            <div class="card-body">
                               @if(isset($_GET['crecRegRequest']))
                   <input name="crec_reg_request_id" type="hidden" value="{{$_GET['crecRegRequest']}}"> 
                    @endif      
                                
                                
                     <div class="row mb-3">
                        <div class="col-md-2">
                <label class="required" for="neededdoc_id">{{ trans('cruds.crecRegDoc.fields.neededdoc') }}
                            
                            <span class="text-danger">*</span>
                            </label>
                        </div>
                        <div class="col-md-4">
                                           <select class="form-control   {{ $errors->has('neededdoc') ? 'is-invalid' : '' }}" name="neededdoc_id" id="neededdoc_id" required>
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
                       <div class="form-group">
                <button class="btn btn-danger" type="submit">
                     {{ trans('global.save') }}
                </button>
            </div>   
                     
             </form>
            
         </div>
                  {{--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"> اغلاق</button>
        <button onclick="myFunctionreg()" type="button" class="btn btn-primary"> {{ trans('global.save') }} </button>
      </div> --}}
      </div>
      
    </div>
  </div>       
                
<!--
                <h6 class="card-header">        {{ trans('global.create') }} {{ trans('cruds.crecRegDoc.title_singular') }}
</h6>
-->
                <div class="card-body">
              <div class="table-responsive">
            <table id="myTablereg" class=" table table-bordered table-striped table-hover datatable datatable-CrecRegDoc">
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
                           <?php
                    if(isset($_GET['crecRegRequest'])){
                     
   $crecRegDocs = App\Models\CrecRegDoc::where('crec_reg_request_id', $_GET['crecRegRequest'])->get();
                         
                        }
                     ?>
                    
                    
                    
                      @if(isset($_GET['crecRegRequest']))
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
                            <a target="_blank" href="/{{$crecRegDoc->doc_file}}">عرض الملف</a>
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
                     @endif
                </tbody>
            </table>
        </div>
              
                 
              
                </div>
            </div>
             <!--نهاية التكرار4-->

            
            
            
            
             
            
            
            
            
            
            
            
            
            
            
            
       
            
            
            
                
                
                
                
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
            
            
        {{--</form>--}}
        
        
     
        
        
    </div>
</div>
<script>
function myFunctionreg() {
    //alert("321");
      var table = document.getElementById("myTablereg");
  var row = table.insertRow();
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
     var cell3 = row.insertCell(2);
     var cell4 = row.insertCell(3);

    var neededdoc_id = document.getElementById("neededdoc_id");
    var docs_date = document.getElementById("docs_date");
var docs_ref_code = document.getElementById("docs_ref_code");
var doc_file = document.getElementById("doc_file");


    cell1.innerText = neededdoc_id.value;
  cell2.innerText = docs_date.value;

    cell3.innerText = docs_ref_code.value;
    cell4.innerText = doc_file.value;
     
}
function myFunction() {
   // alert("123");
    
//             let branche_id = document.getElementById("branche_id").value;
//             if (branche_id == ""  ) {
//     alert("inputs must be filled out");
//  }
//        else{
    
    
    
  var table = document.getElementById("myTable");
  var row = table.insertRow();
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
     var cell3 = row.insertCell(2);
     var cell4 = row.insertCell(3);
     var cell5 = row.insertCell(4);
     var cell6 = row.insertCell(5);
     var cell7 = row.insertCell(6);
     var cell8 = row.insertCell(7);
     var cell9 = row.insertCell(8);
     var cell10 = row.insertCell(9);
     var cell11 = row.insertCell(10);
     var cell12 = row.insertCell(11);
     var cell13 = row.insertCell(12);
     var cell14 = row.insertCell(13);
     var cell15 = row.insertCell(14);
     var cell16 = row.insertCell(15);
     var cell17 = row.insertCell(16);
     var cell18 = row.insertCell(17);
     var cell19 = row.insertCell(18);
     var cell20 = row.insertCell(19);
     var cell21 = row.insertCell(20);
     var cell22 = row.insertCell(21);
 var person_id_no = document.getElementById("person_id_no");
//var person_type = document.getElementById("person_type");
var person_email = document.getElementById("person_email");
var person_name_a = document.getElementById("person_name_a");
var person_name_l = document.getElementById("person_name_l");
  var person_birth_date = document.getElementById("person_birth_date");
    var person_birth_place = document.getElementById("person_birth_place");
    var person_gender = document.getElementById("person_gender");
    var person_nationality_id = document.getElementById("person_nationality_id");
    var country_id_reg = document.getElementById("country_id_reg");
    var governorate_id_reg = document.getElementById("governorate_id_reg");
    var city_id_reg = document.getElementById("city_id_reg");
    var person_type_id = document.getElementById("person_type_id");
    var person_address_a = document.getElementById("person_address_a");
    var person_address_l = document.getElementById("person_address_l");
    var person_street = document.getElementById("person_street");
    var person_bldg_no = document.getElementById("person_bldg_no");
    var person_tel_no = document.getElementById("person_tel_no");
    var person_fax_no = document.getElementById("person_fax_no");
    var person_mobile_no = document.getElementById("person_mobile_no");
    var person_po_box = document.getElementById("person_po_box");
    var person_email = document.getElementById("person_email");
    var person_notes = document.getElementById("person_notes");
    // var btt = '<button>DeleteRow</button>';
    cell1.innerText = person_id_no.value;
  cell2.innerText = person_email.value;
 // cell2.innerText = person_type.value;
    cell3.innerText = person_name_a.value;
    cell4.innerText = person_name_l.value;
    cell5.innerText = person_birth_date.value;
    cell6.innerText = person_birth_place.value;
    cell7.innerText = person_gender.value;
    cell8.innerText = person_nationality_id.value;
    cell9.innerText = "country";//country_id_reg.value;
    cell10.innerText = "governorate";//governorate_id_reg.value;
    cell11.innerText = "city";//city_id_reg.value;
     cell12.innerText = person_type_id.value;
    cell13.innerText = person_address_a.value;
    cell14.innerText = person_address_l.value;
    cell15.innerText = person_street.value;
    cell16.innerText = person_bldg_no.value;
    cell17.innerText = person_tel_no.value;
    cell18.innerText = person_fax_no.value;
    cell19.innerText = person_mobile_no.value;
    cell20.innerText = person_po_box.value;
  //  cell21.innerText = person_email.value;
    cell21.innerText = person_notes.value;
   //  cell5.innerText = btt;
  // cell5.innerText =  <button onclick="myFunction()">Try it</button>;
             
            
            
  // document.getElementById("locationtable").reset();
// document.getElementById("locationtable").reset();
// model.classList.remove("modal");
    
    branch.value = -1;
    internal_phone.value = '';
    contact_email.value = '';
    contact_person.value = '';
    
$('#exampleModal').modal('hide'); 

//}
}

</script>


@endsection