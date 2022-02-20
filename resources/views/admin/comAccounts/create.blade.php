@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.comAccount.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.com-accounts.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="account_code">{{ trans('cruds.comAccount.fields.account_code') }}</label>
                <input class="form-control {{ $errors->has('account_code') ? 'is-invalid' : '' }}" type="text" name="account_code" id="account_code" value="{{ old('account_code', '') }}" required>
                @if($errors->has('account_code'))
                    <span class="text-danger">{{ $errors->first('account_code') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comAccount.fields.account_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="account_name">{{ trans('cruds.comAccount.fields.account_name') }}</label>
                <input class="form-control {{ $errors->has('account_name') ? 'is-invalid' : '' }}" type="text" name="account_name" id="account_name" value="{{ old('account_name', '') }}" required>
                @if($errors->has('account_name'))
                    <span class="text-danger">{{ $errors->first('account_name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comAccount.fields.account_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="account_address_a">{{ trans('cruds.comAccount.fields.account_address_a') }}</label>
                <input class="form-control {{ $errors->has('account_address_a') ? 'is-invalid' : '' }}" type="text" name="account_address_a" id="account_address_a" value="{{ old('account_address_a', '') }}">
                @if($errors->has('account_address_a'))
                    <span class="text-danger">{{ $errors->first('account_address_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comAccount.fields.account_address_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="note">{{ trans('cruds.comAccount.fields.note') }}</label>
                <input class="form-control {{ $errors->has('note') ? 'is-invalid' : '' }}" type="text" name="note" id="note" value="{{ old('note', '') }}">
                @if($errors->has('note'))
                    <span class="text-danger">{{ $errors->first('note') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comAccount.fields.note_helper') }}</span>
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