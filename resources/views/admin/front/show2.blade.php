@extends('layouts.admin1')
@section('content')




 <div class="container mt-3">
        <div class="card p-2">
            <h6 class="card-header">  {{ trans('global.show') }} {{ trans('cruds.crecRegRequest.title') }}</h6>
            <!--بداية التكرار-->
            <div class="card mt-2 border border-dark p-2">
                <h6 class="card-header"> {{ trans('global.show') }} {{ trans('cruds.crecRegRequest.title') }}</h6>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegRequest.fields.crec_code') }} </label>
                        </div>
                        <div class="col-md-4">
                            <input readonly value="{{ $crecRegRequest->crec_code }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegRequest.fields.crec_appl_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->crec_appl_no }}" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegRequest.fields.crec_appl_date') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->crec_appl_date }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegRequest.fields.crec_register_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->crec_register_no }}" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegRequest.fields.crec_comp_name_a') }}
                            </label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->crec_comp_name_a }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegRequest.fields.crec_comp_name_l') }}
                            </label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->crec_comp_name_l }}" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegRequest.fields.crec_comp_name_h') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->crec_comp_name_h }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegRequest.fields.crec_start_date') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                  <input value="{{ $crecRegRequest->crec_start_date }}" type="text" class="form-control">

                        </div>
                    </div>     <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegRequest.fields.crec_start_date') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->crec_start_date }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegRequest.fields.crec_brand_name') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                  <input value="{{ $crecRegRequest->crec_brand_name }}" type="text" class="form-control">

                        </div>
                    </div>     <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegRequest.fields.country') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->country->country_tel_prefix }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegRequest.fields.governorate') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                  <input value="{{ $crecRegRequest->governorate->governorate_name_a ?? '' }}" type="text" class="form-control">

                        </div>
                    </div>     <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegRequest.fields.city') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->city->city_name_a }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegRequest.fields.crec_address_a') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                  <input value="{{ $crecRegRequest->crec_address_a }}" type="text" class="form-control">

                        </div>
                    </div>     <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegRequest.fields.crec_address_l') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->crec_address_l }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegRequest.fields.crec_street') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                  <input value="{{ $crecRegRequest->crec_street }}" type="text" class="form-control">

                        </div>
                    </div>     <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegRequest.fields.crec_bldg_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->crec_bldg_no }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegRequest.fields.crec_tel_no') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                  <input value="{{ $crecRegRequest->crec_tel_no }}" type="text" class="form-control">

                        </div>
                    </div>     <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegRequest.fields.crec_fax_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->crec_fax_no }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegRequest.fields.crec_mobile_no') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                  <input value="{{ $crecRegRequest->crec_mobile_no }}" type="text" class="form-control">

                        </div>
                    </div>   
                    
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegRequest.fields.crec_po_box') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->crec_po_box }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegRequest.fields.crec_email') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                  <input value="{{ $crecRegRequest->crec_email }}" type="text" class="form-control">

                        </div>
                    </div>    
                    
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegRequest.fields.crec_website') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->crec_website }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegRequest.fields.crec_applicant_id_no') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                  <input value="{{ $crecRegRequest->crec_applicant_id_no }}" type="text" class="form-control">

                        </div>
                    </div>     <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegRequest.fields.crec_applicant_name') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->crec_applicant_name }}" type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegRequest.fields.crec_end_date') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                  <input value="{{ $crecRegRequest->crec_end_date }}" type="text" class="form-control">

                        </div>
                    </div>     <div class="row mb-3">
                        {{--<div class="col-md-2">
                            <label> {{ trans('cruds.crecRegRequest.fields.crec_notes') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->crec_notes }}" type="text" class="form-control">
                        </div>--}}
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegRequest.fields.crec_work_class') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                  <input value=" {{ $crecRegRequest->crec_work_class->work_class_desc_a ?? '' }}" type="text" class="form-control">

                        </div>
                    
                    
                    
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegRequest.fields.crec_work_name') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->crec_work_name }}" type="text" class="form-control">
                        </div>
                    </div>     <div class="row mb-3">
<!--
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegRequest.fields.crec_work_name') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegRequest->crec_work_name }}" type="text" class="form-control">
                        </div>
-->
                        {{--<div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegRequest.fields.crec_start_date') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                  <input value="{{ $crecRegRequest->crec_start_date }}" type="text" class="form-control">

                        </div>--}}
                    </div>      
                    
                    
                    
                </div>
            </div>
             <!--نهاية التكرار-->
            
            
            
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
                            <input value="{{ $crecRegPerson->crec_reg_request->crec_comp_name_a ?? '' }}"   type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegPerson.fields.person_id_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegPerson->person_id_no }}"  type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label> {{ trans('cruds.crecRegPerson.fields.person_type') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegPerson->person_type }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>{{ trans('cruds.crecRegPerson.fields.person_name_a') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegPerson->person_name_a }}"  type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_name_l') }}
                            </label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegPerson->person_name_l }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>   {{ trans('cruds.crecRegPerson.fields.person_birth_date') }}
                            </label>
                        </div>
                        <div class="col-md-4">
                            <input value="{{ $crecRegPerson->person_birth_date }}"  type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_birth_place') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegPerson->person_birth_place }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_gender') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input value="{{ $crecRegPerson->person_gender }}"  type="text" class="form-control">

                        </div>
                    </div> 
                    
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_nationality') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="   {{ $crecRegPerson->person_nationality->nationality_a ?? '' }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.country') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input value="{{ $crecRegPerson->country->country_name_a ?? '' }}"  type="text" class="form-control">

                        </div>
                    </div>   <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.governorate') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value="  {{ $crecRegPerson->governorate->governorate_name_a ?? '' }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.city') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input value=" {{ $crecRegPerson->city->city_name_a ?? '' }}"  type="text" class="form-control">

                        </div>
                    </div>   <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_address_a') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegPerson->person_address_a }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_address_l') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input value="{{ $crecRegPerson->person_address_l }}"  type="text" class="form-control">

                        </div>
                    </div>   <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_street') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegPerson->person_street }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_bldg_no') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input value="{{ $crecRegPerson->person_bldg_no }}"  type="text" class="form-control">

                        </div>
                    </div>   <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_tel_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegPerson->person_tel_no }}"  type="text" class="form-control">
                        </div>
                        {{--<div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_fax_no') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input value="{{ $crecRegPerson->person_fax_no }}"  type="text" class="form-control">

                        </div>--}}
                    </div>   <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_mobile_no') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegPerson->person_mobile_no }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_po_box') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input value="{{ $crecRegPerson->person_po_box }}"  type="text" class="form-control">

                        </div>
                    </div>   <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_email') }}</label>
                        </div>
                        <div class="col-md-4">
                            <input value=" {{ $crecRegPerson->person_email }}"  type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegPerson.fields.person_notes') }}
                                 </label>
                        </div>
                        <div class="col-md-4">
                         <input value="{{ $crecRegPerson->person_notes }}"  type="text" class="form-control">

                        </div>
                    </div>   <div class="row mb-3">
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
                    </div>   <div class="row mb-3">
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
                    </div>   <div class="row mb-3">
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
                    
                    
                    
                </div>
            </div>
            @endforeach
             <!--نهاية التكرار-->
 
            
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
                            <input value="{{ $crecRegBranch->branch_work_class}}" type="text" class="form-control">
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
            
            
             @foreach($crecRegDelegates as  $crecRegDelegate)
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

            @endforeach
            
            
            
            
             @foreach($crecRegDocs as  $crecRegDoc)
                       <!--بداية التكرار-->
            <div class="card mt-2 border border-dark p-2">
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
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label>  {{ trans('cruds.crecRegDoc.fields.doc_file') }}
                            </label>
                        </div>
                        <div class="col-md-4">
                       <a target="_blank" href="/{{$crecRegDoc->doc_file}}">عرض الملف</a>

                        </div>
                     </div>
                
                </div>
            </div>
             <!--نهاية التكرار-->
 
            
            @endforeach
            
            
            
            
            
            
            
            
            
            
             
        </div>
    </div>





















 


@endsection