@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.comWorkClass.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.com-work-classes.update", [$comWorkClass->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="work_class_desc_a">{{ trans('cruds.comWorkClass.fields.work_class_desc_a') }}</label>
                <input class="form-control {{ $errors->has('work_class_desc_a') ? 'is-invalid' : '' }}" type="text" name="work_class_desc_a" id="work_class_desc_a" value="{{ old('work_class_desc_a', $comWorkClass->work_class_desc_a) }}" required>
                @if($errors->has('work_class_desc_a'))
                    <span class="text-danger">{{ $errors->first('work_class_desc_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comWorkClass.fields.work_class_desc_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="work_class_desc_l">{{ trans('cruds.comWorkClass.fields.work_class_desc_l') }}</label>
                <input class="form-control {{ $errors->has('work_class_desc_l') ? 'is-invalid' : '' }}" type="text" name="work_class_desc_l" id="work_class_desc_l" value="{{ old('work_class_desc_l', $comWorkClass->work_class_desc_l) }}">
                @if($errors->has('work_class_desc_l'))
                    <span class="text-danger">{{ $errors->first('work_class_desc_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comWorkClass.fields.work_class_desc_l_helper') }}</span>
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