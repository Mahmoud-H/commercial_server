@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.comNeededDoc.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.com-needed-docs.store") }}" enctype="multipart/form-data">
            @csrf
            
             <div class="form-group">
                <label class="required" for="crec_reg_request_id">{{ trans('cruds.crecRegPerson.fields.crec_reg_request') }}</label>
                <select  class="form-control select2 {{ $errors->has('crec_reg_request') ? 'is-invalid' : '' }}" name="crec_reg_request_id" id="crec_reg_request_id" required>
                    @foreach($crec_reg_requests as $id => $entry)
                        <option value="{{ $id }}" {{ old('crec_reg_request_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('crec_reg_request'))
                    <span class="text-danger">{{ $errors->first('crec_reg_request') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegPerson.fields.crec_reg_request_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.comNeededDoc.fields.code') }}</label>
                <input readonly class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', '') }}" required>
                @if($errors->has('code'))
                    <span class="text-danger">{{ $errors->first('code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comNeededDoc.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="needed_doc_name_l">{{ trans('cruds.comNeededDoc.fields.needed_doc_name_a') }}</label>
                <input class="form-control {{ $errors->has('needed_doc_name_a') ? 'is-invalid' : '' }}" type="text" name="needed_doc_name_a" id="needed_doc_name_a" value="{{ old('needed_doc_name_a', '') }}">
                @if($errors->has('needed_doc_name_a'))
                    <span class="text-danger">{{ $errors->first('needed_doc_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comNeededDoc.fields.needed_doc_name_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="needed_doc_name_l">{{ trans('cruds.comNeededDoc.fields.needed_doc_name_l') }}</label>
                <input class="form-control {{ $errors->has('needed_doc_name_l') ? 'is-invalid' : '' }}" type="text" name="needed_doc_name_l" id="needed_doc_name_l" value="{{ old('needed_doc_name_l', '') }}">
                @if($errors->has('needed_doc_name_l'))
                    <span class="text-danger">{{ $errors->first('needed_doc_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comNeededDoc.fields.needed_doc_name_l_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('needed_doc_is_required') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="needed_doc_is_required" value="0">
                    <input class="form-check-input" type="checkbox" name="needed_doc_is_required" id="needed_doc_is_required" value="1" {{ old('needed_doc_is_required', 0) == 1 || old('needed_doc_is_required') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="needed_doc_is_required">{{ trans('cruds.comNeededDoc.fields.needed_doc_is_required') }}</label>
                </div>
                @if($errors->has('needed_doc_is_required'))
                    <span class="text-danger">{{ $errors->first('needed_doc_is_required') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comNeededDoc.fields.needed_doc_is_required_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection