@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.crecRegFee.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.crec-reg-fees.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="crec_reg_request_id">{{ trans('cruds.crecRegFee.fields.crec_reg_request') }}</label>
                <select class="form-control select2 {{ $errors->has('crec_reg_request') ? 'is-invalid' : '' }}" name="crec_reg_request_id" id="crec_reg_request_id" required>
                    @foreach($crec_reg_requests as $id => $entry)
                        <option value="{{ $id }}" {{ old('crec_reg_request_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('crec_reg_request'))
                    <span class="text-danger">{{ $errors->first('crec_reg_request') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegFee.fields.crec_reg_request_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fee_type_id">{{ trans('cruds.crecRegFee.fields.fee_type') }}</label>
                <select class="form-control select2 {{ $errors->has('fee_type') ? 'is-invalid' : '' }}" name="fee_type_id" id="fee_type_id" required>
                    @foreach($fee_types as $id => $entry)
                        <option value="{{ $id }}" {{ old('fee_type_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('fee_type'))
                    <span class="text-danger">{{ $errors->first('fee_type') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegFee.fields.fee_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fee_type_amt">{{ trans('cruds.crecRegFee.fields.fee_type_amt') }}</label>
                <input class="form-control {{ $errors->has('fee_type_amt') ? 'is-invalid' : '' }}" type="number" name="fee_type_amt" id="fee_type_amt" value="{{ old('fee_type_amt', '') }}" step="0.001" required>
                @if($errors->has('fee_type_amt'))
                    <span class="text-danger">{{ $errors->first('fee_type_amt') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegFee.fields.fee_type_amt_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fee_qty">{{ trans('cruds.crecRegFee.fields.fee_qty') }}</label>
                <input class="form-control {{ $errors->has('fee_qty') ? 'is-invalid' : '' }}" type="number" name="fee_qty" id="fee_qty" value="{{ old('fee_qty', '1') }}" step="1" required>
                @if($errors->has('fee_qty'))
                    <span class="text-danger">{{ $errors->first('fee_qty') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegFee.fields.fee_qty_helper') }}</span>
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