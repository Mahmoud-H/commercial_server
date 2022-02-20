@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.comService.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.com-services.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="service_name_a">{{ trans('cruds.comService.fields.service_name_a') }}</label>
                <input class="form-control {{ $errors->has('service_name_a') ? 'is-invalid' : '' }}" type="text" name="service_name_a" id="service_name_a" value="{{ old('service_name_a', '') }}" required>
                @if($errors->has('service_name_a'))
                    <span class="text-danger">{{ $errors->first('service_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comService.fields.service_name_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="service_name_l">{{ trans('cruds.comService.fields.service_name_l') }}</label>
                <input class="form-control {{ $errors->has('service_name_l') ? 'is-invalid' : '' }}" type="text" name="service_name_l" id="service_name_l" value="{{ old('service_name_l', '') }}">
                @if($errors->has('service_name_l'))
                    <span class="text-danger">{{ $errors->first('service_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comService.fields.service_name_l_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="account_id">{{ trans('cruds.comService.fields.account') }}</label>
                <select class="form-control select2 {{ $errors->has('account') ? 'is-invalid' : '' }}" name="account_id" id="account_id">
                    @foreach($accounts as $id => $entry)
                        <option value="{{ $id }}" {{ old('account_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('account'))
                    <span class="text-danger">{{ $errors->first('account') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comService.fields.account_helper') }}</span>
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