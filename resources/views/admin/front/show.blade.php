@extends('layouts.admin1')

@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.crecRegRequest.title_singular') }}
    </div>

    <div class="card-body">
        <div class="card mt-2 border border-dark p-2">
            {{--<h6 class="card-header">        {{ trans('global.create') }} {{ trans('cruds.crecRegRequest.title_singular') }}--}}
            {{--</h6>--}}
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label for="crec_code"> {{ trans('cruds.crecRegRequest.fields.crec_code') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegRequest->crec_code   }}
                    </div>
                    <div class="col-md-2">
                      <label for="crec_appl_no">{{ trans('cruds.crecRegRequest.fields.crec_appl_no') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegRequest->crec_appl_no }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
           <label class="required" for="crec_appl_date">{{ trans('cruds.crecRegRequest.fields.crec_appl_date') }}
                        <span class="text-danger">*</span>

                        </label>

                    </div>
                    <div class="col-md-4">
                  {{ $crecRegRequest->crec_appl_date }}



                    </div>
                    <div class="col-md-2">
       <label class="required" for="crec_register_no">{{ trans('cruds.crecRegRequest.fields.crec_register_no') }}
                        <span class="text-danger">*</span>

                        </label>

                    </div>
                    <div class="col-md-4">
                        {{ $crecRegRequest->crec_register_no }}


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


                    </div>
                    <div class="col-md-2">
            <label for="crec_comp_name_l">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_l') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegRequest->crec_comp_name_l }}

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
            <label for="crec_comp_name_h">{{ trans('cruds.crecRegRequest.fields.crec_comp_name_h') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegRequest->crec_comp_name_l }}

                    </div>
                    <div class="col-md-2">
            <label for="crec_start_date">{{ trans('cruds.crecRegRequest.fields.crec_start_date') }}</label>
                    </div>
                    <div class="col-md-4">
                          {{ $crecRegRequest->crec_start_date }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        {{ trans('cruds.crecRegRequest.fields.crec_brand_name') }}
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegRequest->crec_brand_name }}

                    </div>
                    <div class="col-md-2">
            <label class="required" for="country_id">{{ trans('cruds.crecRegRequest.fields.country') }}
                        <span class="text-danger">*</span>
                        </label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegRequest->country->country_name_a }}

                      </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
            <label for="governorate_id">{{ trans('cruds.crecRegRequest.fields.governorate') }}</label>
                    </div>
                    <div class="col-md-4">
                     {{--   {{ $crecRegRequest->governorate->governorate_name_a ?? '' }} --}}
                         <?php
                                $coun = App\Models\ComGovernorate::where('region_cd',$crecRegRequest->governorate_id)->first();
                              
                                    if($coun != null)
                                {
                                      echo $coun->governorate_name_a;
                                }
                                ?> 
                        
                        
                        
                         @if($errors->has('governorate'))
                            <span class="text-danger">{{ $errors->first('governorate') }}</span>
                        @endif
                     </div>
                    <div class="col-md-2">
            <label class="required" for="city_id">{{ trans('cruds.crecRegRequest.fields.city') }}
                        <span class="text-danger">*</span>
                        </label>
                    </div>
                    <div class="col-md-4">
                      {{-- {{ $crecRegRequest->city->city_name_a }} --}}
                       
                        <?php
                                $coun = App\Models\ComCity::where('city_cd',$crecRegRequest->city_id)->first();
                                     if($coun != null)
                                {
                                      echo $coun->city_name_a;
                                }?>
                       


                      </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
            <label for="crec_address_a">{{ trans('cruds.crecRegRequest.fields.crec_address_a') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegRequest->crec_address_a }}
                     </div>
                    <div class="col-md-2">
            <label for="crec_address_l">{{ trans('cruds.crecRegRequest.fields.crec_address_l') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegRequest->crec_address_l }}
                     </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
            <label for="crec_street">{{ trans('cruds.crecRegRequest.fields.crec_street') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegRequest->crec_street }}
                     </div>
                    <div class="col-md-2">
            <label for="crec_bldg_no">{{ trans('cruds.crecRegRequest.fields.crec_bldg_no') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegRequest->crec_bldg_no }}
                     </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
            <label for="crec_mobile_no">{{ trans('cruds.crecRegRequest.fields.crec_mobile_no') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegRequest->crec_mobile_no }}
                     </div>
                    <div class="col-md-2">
            <label for="crec_po_box">{{ trans('cruds.crecRegRequest.fields.crec_po_box') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegRequest->crec_po_box }}
                     </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
            <label class="required" for="crec_applicant_id_no">{{ trans('cruds.crecRegRequest.fields.crec_applicant_id_no') }}
                        <span class="text-danger">*</span>
                        </label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegRequest->crec_applicant_id_no }}
                     </div>
                    <div class="col-md-2">
            <label for="crec_applicant_name">{{ trans('cruds.crecRegRequest.fields.crec_applicant_name') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegRequest->crec_applicant_name }}
                     </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
            <label for="crec_work_class_id">{{ trans('cruds.crecRegRequest.fields.crec_work_class') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegRequest->crec_work_class->work_class_desc_a ?? '' }}


                    </div>
                    <div class="col-md-2">
            <label for="crec_work_name">{{ trans('cruds.crecRegRequest.fields.crec_work_name') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegRequest->crec_work_name }}
                     </div>
                </div>
            </div>
        </div>
        @foreach($crecRegPeoples as  $crecRegPerson)
        <div class="card mt-2 border border-dark p-2">
            {{--<h6 class="card-header"> {{ trans('global.show') }} {{ trans('cruds.crecRegPerson.title') }}</h6>--}}
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label> {{ trans('cruds.crecRegPerson.fields.crec_reg_request') }} </label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->crec_reg_request->crec_comp_name_a ?? '' }}
                     </div>
                    <div class="col-md-2">
                        <label> {{ trans('cruds.crecRegPerson.fields.person_id_no') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->person_id_no }}
                     </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label> {{ trans('cruds.crecRegPerson.fields.person_type') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->person_type->person_type_name_a }}
                     </div>
                    <div class="col-md-2">
                        <label>{{ trans('cruds.crecRegPerson.fields.person_name_a') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->person_name_a }}
                     </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label>  {{ trans('cruds.crecRegPerson.fields.person_name_l') }}
                        </label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->person_name_l }}
                     </div>
                    <div class="col-md-2">
                        <label>   {{ trans('cruds.crecRegPerson.fields.person_birth_date') }}
                        </label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->person_birth_date }}
                     </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label>  {{ trans('cruds.crecRegPerson.fields.person_birth_place') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->person_birth_place }}
                     </div>
                    <div class="col-md-2">
                        <label>  {{ trans('cruds.crecRegPerson.fields.person_gender') }}
                             </label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->person_gender }}

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label>  {{ trans('cruds.crecRegPerson.fields.person_nationality') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->person_nationality->country_name_a ?? '' }}
                     </div>
                    <div class="col-md-2">
                        <label>  {{ trans('cruds.crecRegPerson.fields.country') }}
                             </label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->country->country_name_a ?? '' }}

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label>  {{ trans('cruds.crecRegPerson.fields.governorate') }}</label>
                    </div>
                    <div class="col-md-4">
                     {{--   {{ $crecRegPerson->governorate->governorate_name_a ?? '' }} --}}
                        
                         <?php
                                $coun = App\Models\ComGovernorate::where('region_cd',$crecRegPerson->governorate_id)->first();
                              
                                    if($coun != null)
                                {
                                      echo $coun->governorate_name_a;
                                }
                                ?> 
                        
                     </div>
                    <div class="col-md-2">
                        <label>  {{ trans('cruds.crecRegPerson.fields.city') }}
                             </label>
                    </div>
                    <div class="col-md-4">
                    {{--    {{ $crecRegPerson->city->city_name_a ?? '' }} --}}
                        
                        
                         <?php
                                $coun = App\Models\ComCity::where('city_cd',$crecRegPerson->city_id)->first();
                                     if($coun != null)
                                {
                                      echo $coun->city_name_a;
                                }?>

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label>  {{ trans('cruds.crecRegPerson.fields.person_address_a') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->person_address_a }}
                     </div>
                    <div class="col-md-2">
                        <label>  {{ trans('cruds.crecRegPerson.fields.person_address_l') }}
                             </label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->person_address_l }}

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label>  {{ trans('cruds.crecRegPerson.fields.person_street') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->person_street }}
                     </div>
                    <div class="col-md-2">
                        <label>  {{ trans('cruds.crecRegPerson.fields.person_bldg_no') }}
                             </label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->person_bldg_no }}

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label>  {{ trans('cruds.crecRegPerson.fields.person_tel_no') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->person_tel_no }}
                     </div>
                    <div class="col-md-2">
                        <label>  {{ trans('cruds.crecRegPerson.fields.person_fax_no') }}
                             </label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->person_fax_no }}

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <label>  {{ trans('cruds.crecRegPerson.fields.person_mobile_no') }}</label>
                    </div>
                    <div class="col-md-4">
                         {{ $crecRegPerson->person_mobile_no }}
                     </div>
                    <div class="col-md-2">
                        <label>  {{ trans('cruds.crecRegPerson.fields.person_po_box') }}
                             </label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->person_po_box }}

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">
            <label class="required" for="person_type_id">{{ trans('cruds.crecRegPerson.fields.person_type') }}</label>
                    </div>
                    <div class="col-md-4">
                        {{ $crecRegPerson->person_type->person_type_name_a }}
                     </div>


                </div>
            </div>
        </div>
        @endforeach
        <div class="card mt-2 border border-dark p-2">
                {{--<h6 class="card-header"> {{ trans('global.show') }} {{ trans('cruds.crecRegPerson.title') }}</h6>--}}
            <div class="card-body">
                @foreach($arr as  $med)
                    <div class="card mt-2 border p-2">
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
                                <a target="_blank" href="/commercial/public/storage/{{$folder}}/{{$med[0]->file_name}}">عرض الملف</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        
           <div class="form-group">
                <a class="btn btn-primary" href="/commercial/public/admin/front">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        
        
        
        
        
    </div>

</div>

@endsection
