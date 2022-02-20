@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.crecRegDelegate.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.crec-reg-delegates.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="crec_reg_request_id">{{ trans('cruds.crecRegDelegate.fields.crec_reg_request') }}</label>
                <select class="form-control select2 {{ $errors->has('crec_reg_request') ? 'is-invalid' : '' }}" name="crec_reg_request_id" id="crec_reg_request_id" required>
                    @foreach($crec_reg_requests as $id => $entry)
                        <option value="{{ $id }}" {{ old('crec_reg_request_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('crec_reg_request'))
                    <span class="text-danger">{{ $errors->first('crec_reg_request') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.crecRegDelegate.fields.crec_reg_request_helper') }}</span>
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