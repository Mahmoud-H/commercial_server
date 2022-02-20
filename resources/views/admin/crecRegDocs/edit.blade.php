@extends('layouts.admin')
@push('style')
    <style>
        select[readonly]{
            background: #eee!important;
            cursor:no-drop!important;
        }

        select[readonly] option{
            display:none!important;
        }
    </style>
@endpush
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.crecRegDoc.title_singular') }}
    </div>

    <div class="card-body">
        <form id="saveForm" method="POST" action="{{ route("admin.crec-reg-docs.update", [$crecRegDoc->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
        </form>
        <form id="deleteForm" method="POST" action="{{ route('admin.crec-reg-docs.deleteFile', $crecRegDoc->id) }}" style="display: inline-block;"></form>
        <div>
            <div class="form-group">
                <label class="required" for="crec_reg_request_id">{{ trans('cruds.crecRegDoc.fields.crec_reg_request') }}</label>
                {{--<select class="form-control select2 {{ $errors->has('crec_reg_request') ? 'is-invalid' : '' }}" name="crec_reg_request_id" id="crec_reg_request_id" required readonly  form="saveForm">--}}
                    {{--@foreach($crec_reg_requests as $id => $entry)--}}
                        {{--<option value="{{ $id }}" {{ (old('crec_reg_request_id') ? old('crec_reg_request_id') : $crecRegDoc->crec_reg_request->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
                <select form="saveForm" class="form-control select2 {{ $errors->has('crec_reg_request') ? 'is-invalid' : '' }}" name="crec_reg_request_id" id="crec_reg_request_id" required>
                    <option value="{{ $crecRegDoc->crec_reg_request->id }}" selected>{{ $crecRegDoc->crec_reg_request->crec_comp_name_a }}</option>
                </select>
                @if($errors->has('crec_reg_request'))
                    <span class="text-danger">{{ $errors->first('crec_reg_request') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegDoc.fields.crec_reg_request_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="neededdoc_id">{{ trans('cruds.crecRegDoc.fields.neededdoc') }}</label>
                {{--<select  class="form-control select2 {{ $errors->has('neededdoc') ? 'is-invalid' : '' }}" name="neededdoc_id" id="neededdoc_id" readonly required >--}}
                    {{--@foreach($neededdocs as $id => $entry)--}}
                        {{--<option value="{{ $id }}" {{ (old('neededdoc_id') ? old('neededdoc_id') : $crecRegDoc->neededdoc->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
                <select form="saveForm" class="form-control select2 {{ $errors->has('crec_reg_request') ? 'is-invalid' : '' }}" name="neededdoc_id" id="neededdoc_id" required>
                    <option value="{{ $crecRegDoc->neededdoc->id }}" selected>{{ $crecRegDoc->neededdoc->needed_doc_name_a }}</option>
                </select>
                @if($errors->has('neededdoc'))
                    <span class="text-danger">{{ $errors->first('neededdoc') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegDoc.fields.neededdoc_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="docs_date">{{ trans('cruds.crecRegDoc.fields.docs_date') }}</label>
                <input form="saveForm" class="form-control date {{ $errors->has('docs_date') ? 'is-invalid' : '' }}" type="text" name="docs_date" id="docs_date" value="{{ old('docs_date', $crecRegDoc->docs_date) }}">
                @if($errors->has('docs_date'))
                    <span class="text-danger">{{ $errors->first('docs_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegDoc.fields.docs_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="docs_ref_code">{{ trans('cruds.crecRegDoc.fields.docs_ref_code') }}</label>
                <input form="saveForm" class="form-control {{ $errors->has('docs_ref_code') ? 'is-invalid' : '' }}" type="text" name="docs_ref_code" id="docs_ref_code" value="{{ old('docs_ref_code', $crecRegDoc->docs_ref_code) }}">
                @if($errors->has('docs_ref_code'))
                    <span class="text-danger">{{ $errors->first('docs_ref_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegDoc.fields.docs_ref_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="doc_file">{{ trans('cruds.crecRegDoc.fields.doc_file') }}</label>
                <br>
                @if ($crecRegDoc->doc_file)
                <div class="row">
                    <div class="col-lg-2">
                        <a target="_blank" href="/{{$crecRegDoc->doc_file}}">عرض الملف</a>
                    </div>
                    @can('crec_reg_doc_delete')
                        <input type="hidden" name="_method" value="DELETE" form="deleteForm">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" form="deleteForm">
                        <input id="delete" type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}"
                               form="deleteForm"
                               onclick="swalConfirm('{{ trans('global.areYouSure') }}' , event,'#deleteForm','قم بالحذف');"
                               {{--onclick="return window.confirm('{{ trans('global.areYouSure') }}');"--}}
                        >
                    @endcan
                </div>
                <br>
                @else
                <input form="saveForm" class="form-control {{ $errors->has('doc_file') ? 'is-invalid' : '' }}" type="file" name="doc_file" id="doc_file" value="{{ old('doc_file', $crecRegDoc->doc_file) }}">
                {{--<input class="form-control {{ $errors->has('doc_file') ? 'is-invalid' : '' }}" type="text" name="doc_file" id="doc_file" value="{{ old('doc_file', $crecRegDoc->doc_file) }}">--}}
                @if($errors->has('doc_file'))
                    <span class="text-danger">{{ $errors->first('doc_file') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegDoc.fields.doc_file_helper') }}</span>
                @endif
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit" form="saveForm" onclick="swalConfirm('{{ trans('global.areYouSure') }}' , event,'#saveForm');">
                    {{ trans('global.save') }}
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

