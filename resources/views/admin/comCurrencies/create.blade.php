@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.comCurrency.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.com-currencies.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="currency_name_a">{{ trans('cruds.comCurrency.fields.currency_name_a') }}</label>
                <input class="form-control {{ $errors->has('currency_name_a') ? 'is-invalid' : '' }}" type="text" name="currency_name_a" id="currency_name_a" value="{{ old('currency_name_a', '') }}" required>
                @if($errors->has('currency_name_a'))
                    <span class="text-danger">{{ $errors->first('currency_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comCurrency.fields.currency_name_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="currency_name_l">{{ trans('cruds.comCurrency.fields.currency_name_l') }}</label>
                <input class="form-control {{ $errors->has('currency_name_l') ? 'is-invalid' : '' }}" type="text" name="currency_name_l" id="currency_name_l" value="{{ old('currency_name_l', '') }}">
                @if($errors->has('currency_name_l'))
                    <span class="text-danger">{{ $errors->first('currency_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comCurrency.fields.currency_name_l_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="currency_symbol">{{ trans('cruds.comCurrency.fields.currency_symbol') }}</label>
                <input class="form-control {{ $errors->has('currency_symbol') ? 'is-invalid' : '' }}" type="text" name="currency_symbol" id="currency_symbol" value="{{ old('currency_symbol', '') }}">
                @if($errors->has('currency_symbol'))
                    <span class="text-danger">{{ $errors->first('currency_symbol') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comCurrency.fields.currency_symbol_helper') }}</span>
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