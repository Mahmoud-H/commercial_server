@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.comCountry.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.com-countries.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="country_name_a">{{ trans('cruds.comCountry.fields.country_name_a') }}</label>
                <input class="form-control {{ $errors->has('country_name_a') ? 'is-invalid' : '' }}" type="text" name="country_name_a" id="country_name_a" value="{{ old('country_name_a', '') }}" required>
                @if($errors->has('country_name_a'))
                    <span class="text-danger">{{ $errors->first('country_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comCountry.fields.country_name_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country_name_l">{{ trans('cruds.comCountry.fields.country_name_l') }}</label>
                <input class="form-control {{ $errors->has('country_name_l') ? 'is-invalid' : '' }}" type="text" name="country_name_l" id="country_name_l" value="{{ old('country_name_l', '') }}">
                @if($errors->has('country_name_l'))
                    <span class="text-danger">{{ $errors->first('country_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comCountry.fields.country_name_l_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="iso_3">{{ trans('cruds.comCountry.fields.iso_3') }}</label>
                <input class="form-control {{ $errors->has('iso_3') ? 'is-invalid' : '' }}" type="text" name="iso_3" id="iso_3" value="{{ old('iso_3', '') }}">
                @if($errors->has('iso_3'))
                    <span class="text-danger">{{ $errors->first('iso_3') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comCountry.fields.iso_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="iso_num">{{ trans('cruds.comCountry.fields.iso_num') }}</label>
                <input class="form-control {{ $errors->has('iso_num') ? 'is-invalid' : '' }}" type="text" name="iso_num" id="iso_num" value="{{ old('iso_num', '') }}">
                @if($errors->has('iso_num'))
                    <span class="text-danger">{{ $errors->first('iso_num') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comCountry.fields.iso_num_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country_tel_prefix">{{ trans('cruds.comCountry.fields.country_tel_prefix') }}</label>
                <input class="form-control {{ $errors->has('country_tel_prefix') ? 'is-invalid' : '' }}" type="text" name="country_tel_prefix" id="country_tel_prefix" value="{{ old('country_tel_prefix', '') }}">
                @if($errors->has('country_tel_prefix'))
                    <span class="text-danger">{{ $errors->first('country_tel_prefix') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comCountry.fields.country_tel_prefix_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nationality_a">{{ trans('cruds.comCountry.fields.nationality_a') }}</label>
                <input class="form-control {{ $errors->has('nationality_a') ? 'is-invalid' : '' }}" type="text" name="nationality_a" id="nationality_a" value="{{ old('nationality_a', '') }}">
                @if($errors->has('nationality_a'))
                    <span class="text-danger">{{ $errors->first('nationality_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comCountry.fields.nationality_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nationality_l">{{ trans('cruds.comCountry.fields.nationality_l') }}</label>
                <input class="form-control {{ $errors->has('nationality_l') ? 'is-invalid' : '' }}" type="text" name="nationality_l" id="nationality_l" value="{{ old('nationality_l', '') }}">
                @if($errors->has('nationality_l'))
                    <span class="text-danger">{{ $errors->first('nationality_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comCountry.fields.nationality_l_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('country_is_valid') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="country_is_valid" value="0">
                    <input class="form-check-input" type="checkbox" name="country_is_valid" id="country_is_valid" value="1" {{ old('country_is_valid', 0) == 1 || old('country_is_valid') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="country_is_valid">{{ trans('cruds.comCountry.fields.country_is_valid') }}</label>
                </div>
                @if($errors->has('country_is_valid'))
                    <span class="text-danger">{{ $errors->first('country_is_valid') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comCountry.fields.country_is_valid_helper') }}</span>
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