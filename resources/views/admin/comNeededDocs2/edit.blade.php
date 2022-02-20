@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.comNeededDoc.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.com-needed-docs.update", [$comNeededDoc->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="needed_doc_name_a">{{ trans('cruds.comNeededDoc.fields.needed_doc_name_a') }}</label>
                <input readonly class="form-control {{ $errors->has('needed_doc_name_a') ? 'is-invalid' : '' }}" type="text" name="needed_doc_name_a" id="needed_doc_name_a" value="{{ old('needed_doc_name_a', $comNeededDoc->needed_doc_name_a) }}" required>
                @if($errors->has('needed_doc_name_a'))
                    <span class="text-danger">{{ $errors->first('needed_doc_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comNeededDoc.fields.needed_doc_name_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="needed_doc_name_l">{{ trans('cruds.comNeededDoc.fields.needed_doc_name_l') }}</label>
                <input class="form-control {{ $errors->has('needed_doc_name_l') ? 'is-invalid' : '' }}" type="text" name="needed_doc_name_l" id="needed_doc_name_l" value="{{ old('needed_doc_name_l', $comNeededDoc->needed_doc_name_l) }}">
                @if($errors->has('needed_doc_name_l'))
                    <span class="text-danger">{{ $errors->first('needed_doc_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comNeededDoc.fields.needed_doc_name_l_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('needed_doc_is_required') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="needed_doc_is_required" value="0">
                    <input class="form-check-input" type="checkbox" name="needed_doc_is_required" id="needed_doc_is_required" value="1" {{ $comNeededDoc->needed_doc_is_required || old('needed_doc_is_required', 0) === 1 ? 'checked' : '' }}>
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