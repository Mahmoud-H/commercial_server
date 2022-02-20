@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.serviceNeededFee.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.service-needed-fees.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="fee_type_id">{{ trans('cruds.serviceNeededFee.fields.fee_type') }}</label>
                <select class="form-control select2 {{ $errors->has('fee_type') ? 'is-invalid' : '' }}" name="fee_type_id" id="fee_type_id" required>
                    @foreach($fee_types as $id => $entry)
                        <option value="{{ $id }}" {{ old('fee_type_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('fee_type'))
                    <span class="text-danger">{{ $errors->first('fee_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.serviceNeededFee.fields.fee_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="service_id">{{ trans('cruds.serviceNeededFee.fields.service') }}</label>
                <select class="form-control select2 {{ $errors->has('service') ? 'is-invalid' : '' }}" name="service_id" id="service_id" required>
                    @foreach($services as $id => $entry)
                        <option value="{{ $id }}" {{ old('service_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('service'))
                    <span class="text-danger">{{ $errors->first('service') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.serviceNeededFee.fields.service_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_required') ? 'is-invalid' : '' }}">
                    <input class="form-check-input" type="checkbox" name="is_required" id="is_required" value="1" required {{ old('is_required', 0) == 1 || old('is_required') === null ? 'checked' : '' }}>
                    <label class="required form-check-label" for="is_required">{{ trans('cruds.serviceNeededFee.fields.is_required') }}</label>
                </div>
                @if($errors->has('is_required'))
                    <span class="text-danger">{{ $errors->first('is_required') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.serviceNeededFee.fields.is_required_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="notes">{{ trans('cruds.serviceNeededFee.fields.notes') }}</label>
                <input class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" type="text" name="notes" id="notes" value="{{ old('notes', '') }}">
                @if($errors->has('notes'))
                    <span class="text-danger">{{ $errors->first('notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.serviceNeededFee.fields.notes_helper') }}</span>
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