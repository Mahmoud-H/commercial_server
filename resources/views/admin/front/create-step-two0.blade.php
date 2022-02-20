@extends('layouts.admin')
@section('content')
 
<div class="card">
     
    
    
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.crecRegPerson.title_singular') }}
    </div>
    <div class="card-header">
     <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">  {{ trans('global.create') }} {{ trans('cruds.crecRegPerson.title_singular') }}</button>
     </div>
    
    
    
    
      <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          
                   <div class="card-body">
            <form method="POST" action="/admin/fron/create-step-two" autocomplete="off" enctype="multipart/form-data">
            @csrf
            {{--<div class="form-group">
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
            </div>--}}
            <div class="row">
                <div class="col-sm-6" >
            <div class="form-group">
                <label class="required" for="person_id_no">{{ trans('cruds.crecRegPerson.fields.person_id_no') }}</label>
                <input class="form-control {{ $errors->has('person_id_no') ? 'is-invalid' : '' }}" type="text" name="person_id_no" id="person_id_no" value="{{{ $product2->person_id_no ?? '' }}}" required>
                @if($errors->has('person_id_no'))
                    <span class="text-danger">{{ $errors->first('person_id_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_id_no_helper') }}</span>
            </div>
                     </div>
                 <div class="col-sm-6" >
            <div class="form-group">
                <label class="required" for="person_name_a">{{ trans('cruds.crecRegPerson.fields.person_name_a') }}</label>
                <input class="form-control {{ $errors->has('person_name_a') ? 'is-invalid' : '' }}" type="text" name="person_name_a" id="person_name_a" value="{{{ $product2->person_name_a ?? '' }}}" required>
                @if($errors->has('person_name_a'))
                    <span class="text-danger">{{ $errors->first('person_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_name_a_helper') }}</span>
            </div>
                </div>
                 </div>
            
            
              <div class="row">
                <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_name_l">{{ trans('cruds.crecRegPerson.fields.person_name_l') }}</label>
                <input class="form-control {{ $errors->has('person_name_l') ? 'is-invalid' : '' }}" type="text" name="person_name_l" id="person_name_l" value="{{{ $product2->person_name_l ?? '' }}}">
                @if($errors->has('person_name_l'))
                    <span class="text-danger">{{ $errors->first('person_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_name_l_helper') }}</span>
            </div>
              </div>
                   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_birth_date">{{ trans('cruds.crecRegPerson.fields.person_birth_date') }}</label>
                <input class="form-control date {{ $errors->has('person_birth_date') ? 'is-invalid' : '' }}" type="text" name="person_birth_date" id="person_birth_date" value="{{{ $product2->person_birth_date ?? '' }}}">
                @if($errors->has('person_birth_date'))
                    <span class="text-danger">{{ $errors->first('person_birth_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_birth_date_helper') }}</span>
            </div>
           </div>
                   </div>
            
            
            
              <div class="row">
                   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_birth_place">{{ trans('cruds.crecRegPerson.fields.person_birth_place') }}</label>
                <input class="form-control {{ $errors->has('person_birth_place') ? 'is-invalid' : '' }}" type="text" name="person_birth_place" id="person_birth_place" value="{{{ $product2->person_birth_place ?? '' }}}">
                @if($errors->has('person_birth_place'))
                    <span class="text-danger">{{ $errors->first('person_birth_place') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_birth_place_helper') }}</span>
            </div> </div>
                   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_gender">{{ trans('cruds.crecRegPerson.fields.person_gender') }}</label>
                <input class="form-control {{ $errors->has('person_gender') ? 'is-invalid' : '' }}" type="text" name="person_gender" id="person_gender" value="{{{ $product2->person_gender ?? '' }}}">
                @if($errors->has('person_gender'))
                    <span class="text-danger">{{ $errors->first('person_gender') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_gender_helper') }}</span>
            </div>
                         </div>
                  </div>
            
            
            
            
            <div class="row">
                   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_nationality_id">{{ trans('cruds.crecRegPerson.fields.person_nationality') }}</label>
                <select class="form-control   {{ $errors->has('person_nationality') ? 'is-invalid' : '' }}" name="person_nationality_id" id="person_nationality_id">
                    {{--@foreach($person_nationalities as $id => $entry)
                        <option value="{{ $id }}" {{ old('person_nationality_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach--}}
                    
                     @foreach($person_nationalities as $id => $entry)
                        <option value="{{ $id }}" {{ (old('person_nationality_id') ? old('person_nationality_id') : $product2->person_nationality_id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                    
                </select>
                @if($errors->has('person_nationality'))
                    <span class="text-danger">{{ $errors->first('person_nationality') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_nationality_helper') }}</span>
            </div> </div><div class="col-sm-6" >
            <div class="form-group">
                <label for="country_id">{{ trans('cruds.crecRegPerson.fields.country') }}</label>
                <select class="form-control   {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id">
                    {{--@foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach--}}
                    
                       @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ (old('country_id') ? old('country_id') : $product2->country_id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach 
                    
                    
                </select>
                @if($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.country_helper') }}</span>
            </div> </div> </div>
            
            
            <div class="row">
                   <div class="col-sm-6" >
            
            <div class="form-group">
                <label for="governorate_id">{{ trans('cruds.crecRegPerson.fields.governorate') }}</label>
                <select class="form-control   {{ $errors->has('governorate') ? 'is-invalid' : '' }}" name="governorate_id" id="governorate_id">
                    {{--@foreach($governorates as $id => $entry)
                        <option value="{{ $id }}" {{ old('governorate_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach--}}
                    
                    
                        @foreach($governorates as $id => $entry)
                        <option value="{{ $id }}" {{ (old('governorate_id') ? old('governorate_id') : $product2->governorate_id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach  
                    
                    
                    
                </select>
                @if($errors->has('governorate'))
                    <span class="text-danger">{{ $errors->first('governorate') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.governorate_helper') }}</span>
            </div> </div> <div class="col-sm-6" >
            <div class="form-group">
                <label for="city_id">{{ trans('cruds.crecRegPerson.fields.city') }}</label>
                <select class="form-control   {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id" id="city_id">
                    {{--@foreach($cities as $id => $entry)
                        <option value="{{ $id }}" {{ old('city_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach--}}
                    
                    
                  @foreach($cities as $id => $entry)
                        <option value="{{ $id }}" {{ (old('city_id') ? old('city_id') : $product2->city_id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach     
                    
                </select>
                @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.city_helper') }}</span>
            </div></div>
            </div>
            
            
            
                        <div class="row">
                   <div class="col-sm-6" >

            
            <div class="form-group">
                <label for="person_address_a">{{ trans('cruds.crecRegPerson.fields.person_address_a') }}</label>
                <input class="form-control {{ $errors->has('person_address_a') ? 'is-invalid' : '' }}" type="text" name="person_address_a" id="person_address_a" value="{{{ $product2->person_address_a ?? '' }}}">
                @if($errors->has('person_address_a'))
                    <span class="text-danger">{{ $errors->first('person_address_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_address_a_helper') }}</span>
            </div></div>   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_address_l">{{ trans('cruds.crecRegPerson.fields.person_address_l') }}</label>
                <input class="form-control {{ $errors->has('person_address_l') ? 'is-invalid' : '' }}" type="text" name="person_address_l" id="person_address_l" value="{{{ $product2->person_address_l ?? '' }}}">
                @if($errors->has('person_address_l'))
                    <span class="text-danger">{{ $errors->first('person_address_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_address_l_helper') }}</span>
            </div> </div> </div>
            
            
            
            <div class="row">
                   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_street">{{ trans('cruds.crecRegPerson.fields.person_street') }}</label>
                <input class="form-control {{ $errors->has('person_street') ? 'is-invalid' : '' }}" type="text" name="person_street" id="person_street" value="{{{ $product2->person_street ?? '' }}}">
                @if($errors->has('person_street'))
                    <span class="text-danger">{{ $errors->first('person_street') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_street_helper') }}</span>
            </div> </div>   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_bldg_no">{{ trans('cruds.crecRegPerson.fields.person_bldg_no') }}</label>
                <input class="form-control {{ $errors->has('person_bldg_no') ? 'is-invalid' : '' }}" type="text" name="person_bldg_no" id="person_bldg_no" value="{{{ $product2->person_bldg_no ?? '' }}}">
                @if($errors->has('person_bldg_no'))
                    <span class="text-danger">{{ $errors->first('person_bldg_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_bldg_no_helper') }}</span>
            </div> </div> </div>
            
            
            
            <div class="row">
                   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_tel_no">{{ trans('cruds.crecRegPerson.fields.person_tel_no') }}</label>
                <input class="form-control {{ $errors->has('person_tel_no') ? 'is-invalid' : '' }}" type="text" name="person_tel_no" id="person_tel_no" value="{{{ $product2->person_tel_no ?? '' }}}">
                @if($errors->has('person_tel_no'))
                    <span class="text-danger">{{ $errors->first('person_tel_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_tel_no_helper') }}</span>
            </div> </div><div class="col-sm-6" >
            <div class="form-group">
                <label for="person_fax_no">{{ trans('cruds.crecRegPerson.fields.person_fax_no') }}</label>
                <input class="form-control {{ $errors->has('person_fax_no') ? 'is-invalid' : '' }}" type="text" name="person_fax_no" id="person_fax_no" value="{{{ $product2->person_fax_no ?? '' }}}">
                @if($errors->has('person_fax_no'))
                    <span class="text-danger">{{ $errors->first('person_fax_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_fax_no_helper') }}</span>
            </div> </div> </div>
            
            
            <div class="row">
                   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_mobile_no">{{ trans('cruds.crecRegPerson.fields.person_mobile_no') }}</label>
                <input class="form-control {{ $errors->has('person_mobile_no') ? 'is-invalid' : '' }}" type="text" name="person_mobile_no" id="person_mobile_no" value="{{{ $product2->person_mobile_no ?? '' }}}">
                @if($errors->has('person_mobile_no'))
                    <span class="text-danger">{{ $errors->first('person_mobile_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_mobile_no_helper') }}</span>
            </div>  </div> <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_po_box">{{ trans('cruds.crecRegPerson.fields.person_po_box') }}</label>
                <input class="form-control {{ $errors->has('person_po_box') ? 'is-invalid' : '' }}" type="text" name="person_po_box" id="person_po_box" value="{{{ $product2->person_po_box ?? '' }}}">
                @if($errors->has('person_po_box'))
                    <span class="text-danger">{{ $errors->first('person_po_box') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_po_box_helper') }}</span>
            </div> </div></div>
            
            
            
            <div class="row">
                   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_email">{{ trans('cruds.crecRegPerson.fields.person_email') }}</label>
                <input class="form-control {{ $errors->has('person_email') ? 'is-invalid' : '' }}" type="text" name="person_email" id="person_email" value="{{{ $product2->person_email ?? '' }}}">
                @if($errors->has('person_email'))
                    <span class="text-danger">{{ $errors->first('person_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_email_helper') }}</span>
            </div></div>   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_notes">{{ trans('cruds.crecRegPerson.fields.person_notes') }}</label>
                <input class="form-control {{ $errors->has('person_notes') ? 'is-invalid' : '' }}" type="text" name="person_notes" id="person_notes" value="{{{ $product2->person_notes ?? '' }}}">
                @if($errors->has('person_notes'))
                    <span class="text-danger">{{ $errors->first('person_notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_notes_helper') }}</span>
            </div> </div> </div>
            
            
            
            <div class="form-group">
                <label class="required" for="person_type_id">{{ trans('cruds.crecRegPerson.fields.person_type') }}</label>
                <select class="form-control   {{ $errors->has('person_type') ? 'is-invalid' : '' }}" name="person_type_id" id="person_type_id" required>
                    {{--@foreach($person_types as $id => $entry)
                        <option value="{{ $id }}" {{ old('person_type_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach--}}
                   @foreach($person_types as $id => $entry)
                        <option value="{{ $id }}" {{ (old('person_type_id') ? old('person_type_id') : $product2->person_type_id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                    
                    
                </select>
                @if($errors->has('person_type'))
                    <span class="text-danger">{{ $errors->first('person_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_type_helper') }}</span>
            </div>
<!--
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
-->
<!--
                 <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('admin.front.create') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Next</button>
                            </div>
                        </div>
                    </div>
-->
                
                  <div class="modal-footer">
            <button  type="submit" class="btn btn-primary"> {{ trans('global.save') }}</button>
<!--            <button onclick="myFunctionServiceAttachment()" type="button" class="btn btn-primary"> {{ trans('global.save') }}</button>-->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
       
      </div>    
                
                
        </form>
            </div>
            
            
            
            
            
            
            
        </div>
<!--
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
-->
          
<!--
              <div class="modal-footer">
            <button onclick="myFunctionServiceAttachment()" type="button" class="btn btn-primary"> {{ trans('global.save') }}</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
       
      </div>
-->
          
          
          
          
          
      </div>
    </div>
  </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    <div class="card-body">
        <div class="row">
            <hr style="width: 100%;display: block;position: absolute;margin: 2%"/>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" class="bg-success" style="display: inline-block;width: 30%;padding: 1rem;text-align: center;line-height: 1.7rem;border: 1px solid black;border-radius: 50%;">
                        <span style="display: none">1</span>
                        <i class="fas fa-check"></i>
                    </a>
                    <span style="display: block;">معلومات الشخصية</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" class="bg-warning" style="display: inline-block;width: 30%;padding: 1rem;text-align: center;line-height: 1.7rem;border: 1px solid black;border-radius: 50%;">
                        2
                    </a>
                    <span style="display: block">إضافة وكيل</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" style="background-color:#f1f6fb;display: inline-block;width: 30%;padding: 1rem;text-align: center;line-height: 1.7rem;border-radius: 50%;">
                        3
                    </a>
                    <span style="display: block">ملفات المطلوبة</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" style="background-color:#f1f6fb;display: inline-block;width: 30%;padding: 1rem;text-align: center;line-height: 1.7rem;border-radius: 50%;">
                        4
                    </a>
                    <span style="display: block">تأكيد المعلومات</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" style="background-color:#f1f6fb;display: inline-block;width: 30%;padding: 1rem;text-align: center;line-height: 1.7rem;border-radius: 50%;">
                        5
                    </a>
                    <span style="display: block">طباعة أمر التحصيل</span>
                </div>
            </div>
            <div class="col-2">
                <div style="text-align: center">
                    <a href="#" style="background-color:#f1f6fb;display: inline-block;width: 30%;padding: 1rem;text-align: center;line-height: 1.7rem;border-radius: 50%;">
                        6
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
            <form method="POST" action="/admin/fron/create-step-two" enctype="multipart/form-data">
            @csrf
            {{--<div class="form-group">
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
            </div>--}}
            <div class="row">
                <div class="col-sm-6" >
            <div class="form-group">
                <label class="required" for="person_id_no">{{ trans('cruds.crecRegPerson.fields.person_id_no') }}</label>
                <input class="form-control {{ $errors->has('person_id_no') ? 'is-invalid' : '' }}" type="text" name="person_id_no" id="person_id_no" value="{{{ $product2->person_id_no ?? '' }}}" required>
                @if($errors->has('person_id_no'))
                    <span class="text-danger">{{ $errors->first('person_id_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_id_no_helper') }}</span>
            </div>
                     </div>
                 <div class="col-sm-6" >
            <div class="form-group">
                <label class="required" for="person_name_a">{{ trans('cruds.crecRegPerson.fields.person_name_a') }}</label>
                <input class="form-control {{ $errors->has('person_name_a') ? 'is-invalid' : '' }}" type="text" name="person_name_a" id="person_name_a" value="{{{ $product2->person_name_a ?? '' }}}" required>
                @if($errors->has('person_name_a'))
                    <span class="text-danger">{{ $errors->first('person_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_name_a_helper') }}</span>
            </div>
                </div>
                 </div>
            
            
              <div class="row">
                <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_name_l">{{ trans('cruds.crecRegPerson.fields.person_name_l') }}</label>
                <input class="form-control {{ $errors->has('person_name_l') ? 'is-invalid' : '' }}" type="text" name="person_name_l" id="person_name_l" value="{{{ $product2->person_name_l ?? '' }}}">
                @if($errors->has('person_name_l'))
                    <span class="text-danger">{{ $errors->first('person_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_name_l_helper') }}</span>
            </div>
              </div>
                   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_birth_date">{{ trans('cruds.crecRegPerson.fields.person_birth_date') }}</label>
                <input class="form-control date {{ $errors->has('person_birth_date') ? 'is-invalid' : '' }}" type="text" name="person_birth_date" id="person_birth_date" value="{{{ $product2->person_birth_date ?? '' }}}">
                @if($errors->has('person_birth_date'))
                    <span class="text-danger">{{ $errors->first('person_birth_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_birth_date_helper') }}</span>
            </div>
           </div>
                   </div>
            
            
            
              <div class="row">
                   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_birth_place">{{ trans('cruds.crecRegPerson.fields.person_birth_place') }}</label>
                <input class="form-control {{ $errors->has('person_birth_place') ? 'is-invalid' : '' }}" type="text" name="person_birth_place" id="person_birth_place" value="{{{ $product2->person_birth_place ?? '' }}}">
                @if($errors->has('person_birth_place'))
                    <span class="text-danger">{{ $errors->first('person_birth_place') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_birth_place_helper') }}</span>
            </div> </div>
                   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_gender">{{ trans('cruds.crecRegPerson.fields.person_gender') }}</label>
                <input class="form-control {{ $errors->has('person_gender') ? 'is-invalid' : '' }}" type="text" name="person_gender" id="person_gender" value="{{{ $product2->person_gender ?? '' }}}">
                @if($errors->has('person_gender'))
                    <span class="text-danger">{{ $errors->first('person_gender') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_gender_helper') }}</span>
            </div>
                         </div>
                  </div>
            
            
            
            
            <div class="row">
                   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_nationality_id">{{ trans('cruds.crecRegPerson.fields.person_nationality') }}</label>
                <select class="form-control select2 {{ $errors->has('person_nationality') ? 'is-invalid' : '' }}" name="person_nationality_id" id="person_nationality_id">
                    {{--@foreach($person_nationalities as $id => $entry)
                        <option value="{{ $id }}" {{ old('person_nationality_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach--}}
                    
                     @foreach($person_nationalities as $id => $entry)
                        <option value="{{ $id }}" {{ (old('person_nationality_id') ? old('person_nationality_id') : $product2->person_nationality_id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                    
                </select>
                @if($errors->has('person_nationality'))
                    <span class="text-danger">{{ $errors->first('person_nationality') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_nationality_helper') }}</span>
            </div> </div><div class="col-sm-6" >
            <div class="form-group">
                <label for="country_id">{{ trans('cruds.crecRegPerson.fields.country') }}</label>
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id">
                    {{--@foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach--}}
                    
                       @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ (old('country_id') ? old('country_id') : $product2->country_id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach 
                    
                    
                </select>
                @if($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.country_helper') }}</span>
            </div> </div> </div>
            
            
            <div class="row">
                   <div class="col-sm-6" >
            
            <div class="form-group">
                <label for="governorate_id">{{ trans('cruds.crecRegPerson.fields.governorate') }}</label>
                <select class="form-control select2 {{ $errors->has('governorate') ? 'is-invalid' : '' }}" name="governorate_id" id="governorate_id">
                    {{--@foreach($governorates as $id => $entry)
                        <option value="{{ $id }}" {{ old('governorate_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach--}}
                    
                    
                        @foreach($governorates as $id => $entry)
                        <option value="{{ $id }}" {{ (old('governorate_id') ? old('governorate_id') : $product2->governorate_id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach  
                    
                    
                    
                </select>
                @if($errors->has('governorate'))
                    <span class="text-danger">{{ $errors->first('governorate') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.governorate_helper') }}</span>
            </div> </div> <div class="col-sm-6" >
            <div class="form-group">
                <label for="city_id">{{ trans('cruds.crecRegPerson.fields.city') }}</label>
                <select class="form-control select2 {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id" id="city_id">
                    {{--@foreach($cities as $id => $entry)
                        <option value="{{ $id }}" {{ old('city_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach--}}
                    
                    
                  @foreach($cities as $id => $entry)
                        <option value="{{ $id }}" {{ (old('city_id') ? old('city_id') : $product2->city_id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach     
                    
                </select>
                @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.city_helper') }}</span>
            </div></div>
            </div>
            
            
            
                        <div class="row">
                   <div class="col-sm-6" >

            
            <div class="form-group">
                <label for="person_address_a">{{ trans('cruds.crecRegPerson.fields.person_address_a') }}</label>
                <input class="form-control {{ $errors->has('person_address_a') ? 'is-invalid' : '' }}" type="text" name="person_address_a" id="person_address_a" value="{{{ $product2->person_address_a ?? '' }}}">
                @if($errors->has('person_address_a'))
                    <span class="text-danger">{{ $errors->first('person_address_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_address_a_helper') }}</span>
            </div></div>   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_address_l">{{ trans('cruds.crecRegPerson.fields.person_address_l') }}</label>
                <input class="form-control {{ $errors->has('person_address_l') ? 'is-invalid' : '' }}" type="text" name="person_address_l" id="person_address_l" value="{{{ $product2->person_address_l ?? '' }}}">
                @if($errors->has('person_address_l'))
                    <span class="text-danger">{{ $errors->first('person_address_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_address_l_helper') }}</span>
            </div> </div> </div>
            
            
            
            <div class="row">
                   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_street">{{ trans('cruds.crecRegPerson.fields.person_street') }}</label>
                <input class="form-control {{ $errors->has('person_street') ? 'is-invalid' : '' }}" type="text" name="person_street" id="person_street" value="{{{ $product2->person_street ?? '' }}}">
                @if($errors->has('person_street'))
                    <span class="text-danger">{{ $errors->first('person_street') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_street_helper') }}</span>
            </div> </div>   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_bldg_no">{{ trans('cruds.crecRegPerson.fields.person_bldg_no') }}</label>
                <input class="form-control {{ $errors->has('person_bldg_no') ? 'is-invalid' : '' }}" type="text" name="person_bldg_no" id="person_bldg_no" value="{{{ $product2->person_bldg_no ?? '' }}}">
                @if($errors->has('person_bldg_no'))
                    <span class="text-danger">{{ $errors->first('person_bldg_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_bldg_no_helper') }}</span>
            </div> </div> </div>
            
            
            
            <div class="row">
                   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_tel_no">{{ trans('cruds.crecRegPerson.fields.person_tel_no') }}</label>
                <input class="form-control {{ $errors->has('person_tel_no') ? 'is-invalid' : '' }}" type="text" name="person_tel_no" id="person_tel_no" value="{{{ $product2->person_tel_no ?? '' }}}">
                @if($errors->has('person_tel_no'))
                    <span class="text-danger">{{ $errors->first('person_tel_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_tel_no_helper') }}</span>
            </div> </div><div class="col-sm-6" >
            <div class="form-group">
                <label for="person_fax_no">{{ trans('cruds.crecRegPerson.fields.person_fax_no') }}</label>
                <input class="form-control {{ $errors->has('person_fax_no') ? 'is-invalid' : '' }}" type="text" name="person_fax_no" id="person_fax_no" value="{{{ $product2->person_fax_no ?? '' }}}">
                @if($errors->has('person_fax_no'))
                    <span class="text-danger">{{ $errors->first('person_fax_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_fax_no_helper') }}</span>
            </div> </div> </div>
            
            
            <div class="row">
                   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_mobile_no">{{ trans('cruds.crecRegPerson.fields.person_mobile_no') }}</label>
                <input class="form-control {{ $errors->has('person_mobile_no') ? 'is-invalid' : '' }}" type="text" name="person_mobile_no" id="person_mobile_no" value="{{{ $product2->person_mobile_no ?? '' }}}">
                @if($errors->has('person_mobile_no'))
                    <span class="text-danger">{{ $errors->first('person_mobile_no') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_mobile_no_helper') }}</span>
            </div>  </div> <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_po_box">{{ trans('cruds.crecRegPerson.fields.person_po_box') }}</label>
                <input class="form-control {{ $errors->has('person_po_box') ? 'is-invalid' : '' }}" type="text" name="person_po_box" id="person_po_box" value="{{{ $product2->person_po_box ?? '' }}}">
                @if($errors->has('person_po_box'))
                    <span class="text-danger">{{ $errors->first('person_po_box') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_po_box_helper') }}</span>
            </div> </div></div>
            
            
            
            <div class="row">
                   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_email">{{ trans('cruds.crecRegPerson.fields.person_email') }}</label>
                <input class="form-control {{ $errors->has('person_email') ? 'is-invalid' : '' }}" type="text" name="person_email" id="person_email" value="{{{ $product2->person_email ?? '' }}}">
                @if($errors->has('person_email'))
                    <span class="text-danger">{{ $errors->first('person_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_email_helper') }}</span>
            </div></div>   <div class="col-sm-6" >
            <div class="form-group">
                <label for="person_notes">{{ trans('cruds.crecRegPerson.fields.person_notes') }}</label>
                <input class="form-control {{ $errors->has('person_notes') ? 'is-invalid' : '' }}" type="text" name="person_notes" id="person_notes" value="{{{ $product2->person_notes ?? '' }}}">
                @if($errors->has('person_notes'))
                    <span class="text-danger">{{ $errors->first('person_notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_notes_helper') }}</span>
            </div> </div> </div>
            
            
            
            <div class="form-group">
                <label class="required" for="person_type_id">{{ trans('cruds.crecRegPerson.fields.person_type') }}</label>
                <select class="form-control select2 {{ $errors->has('person_type') ? 'is-invalid' : '' }}" name="person_type_id" id="person_type_id" required>
                    {{--@foreach($person_types as $id => $entry)
                        <option value="{{ $id }}" {{ old('person_type_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach--}}
                   @foreach($person_types as $id => $entry)
                        <option value="{{ $id }}" {{ (old('person_type_id') ? old('person_type_id') : $product2->person_type_id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                    
                    
                </select>
                @if($errors->has('person_type'))
                    <span class="text-danger">{{ $errors->first('person_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.person_type_helper') }}</span>
            </div>
<!--
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
-->
                 <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('admin.front.create') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Next</button>
                            </div>
                        </div>
                    </div>
        </form>
            </div>
        </div>
    </div>
</div>



@endsection