@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.feeClass.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.fee-classes.update", [$feeClass->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="fee_class_name_a">{{ trans('cruds.feeClass.fields.fee_class_name_a') }}</label>
                <input class="form-control {{ $errors->has('fee_class_name_a') ? 'is-invalid' : '' }}" type="text" name="fee_class_name_a" id="fee_class_name_a" value="{{ old('fee_class_name_a', $feeClass->fee_class_name_a) }}" required>
                @if($errors->has('fee_class_name_a'))
                    <span class="text-danger">{{ $errors->first('fee_class_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.feeClass.fields.fee_class_name_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fee_class_name_l">{{ trans('cruds.feeClass.fields.fee_class_name_l') }}</label>
                <input class="form-control {{ $errors->has('fee_class_name_l') ? 'is-invalid' : '' }}" type="text" name="fee_class_name_l" id="fee_class_name_l" value="{{ old('fee_class_name_l', $feeClass->fee_class_name_l) }}">
                @if($errors->has('fee_class_name_l'))
                    <span class="text-danger">{{ $errors->first('fee_class_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.feeClass.fields.fee_class_name_l_helper') }}</span>
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