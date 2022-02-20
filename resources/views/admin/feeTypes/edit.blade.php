@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.feeType.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.fee-types.update", [$feeType->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="fee_type_name_a">{{ trans('cruds.feeType.fields.fee_type_name_a') }}</label>
                <input class="form-control {{ $errors->has('fee_type_name_a') ? 'is-invalid' : '' }}" type="text" name="fee_type_name_a" id="fee_type_name_a" value="{{ old('fee_type_name_a', $feeType->fee_type_name_a) }}" required>
                @if($errors->has('fee_type_name_a'))
                    <span class="text-danger">{{ $errors->first('fee_type_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.feeType.fields.fee_type_name_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fee_type_name_l">{{ trans('cruds.feeType.fields.fee_type_name_l') }}</label>
                <input class="form-control {{ $errors->has('fee_type_name_l') ? 'is-invalid' : '' }}" type="text" name="fee_type_name_l" id="fee_type_name_l" value="{{ old('fee_type_name_l', $feeType->fee_type_name_l) }}">
                @if($errors->has('fee_type_name_l'))
                    <span class="text-danger">{{ $errors->first('fee_type_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.feeType.fields.fee_type_name_l_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fee_class_id">{{ trans('cruds.feeType.fields.fee_class') }}</label>
                <select class="form-control select2 {{ $errors->has('fee_class') ? 'is-invalid' : '' }}" name="fee_class_id" id="fee_class_id" required>
                    @foreach($fee_classes as $id => $entry)
                        <option value="{{ $id }}" {{ (old('fee_class_id') ? old('fee_class_id') : $feeType->fee_class->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('fee_class'))
                    <span class="text-danger">{{ $errors->first('fee_class') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.feeType.fields.fee_class_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="currency_id">{{ trans('cruds.feeType.fields.currency') }}</label>
                <select class="form-control select2 {{ $errors->has('currency') ? 'is-invalid' : '' }}" name="currency_id" id="currency_id" required>
                    @foreach($currencies as $id => $entry)
                        <option value="{{ $id }}" {{ (old('currency_id') ? old('currency_id') : $feeType->currency->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('currency'))
                    <span class="text-danger">{{ $errors->first('currency') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.feeType.fields.currency_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fee_type_amt">{{ trans('cruds.feeType.fields.fee_type_amt') }}</label>
                <input class="form-control {{ $errors->has('fee_type_amt') ? 'is-invalid' : '' }}" type="number" name="fee_type_amt" id="fee_type_amt" value="{{ old('fee_type_amt', $feeType->fee_type_amt) }}" step="0.0001">
                @if($errors->has('fee_type_amt'))
                    <span class="text-danger">{{ $errors->first('fee_type_amt') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.feeType.fields.fee_type_amt_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_active" value="0">
                    <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ $feeType->is_active || old('is_active', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">{{ trans('cruds.feeType.fields.is_active') }}</label>
                </div>
                @if($errors->has('is_active'))
                    <span class="text-danger">{{ $errors->first('is_active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.feeType.fields.is_active_helper') }}</span>
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