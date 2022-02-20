@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.comGovernorate.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.com-governorates.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="country_id">{{ trans('cruds.comGovernorate.fields.country') }}</label>
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id" required>
                    @foreach($countries as $id => $entry)
                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <span class="text-danger">{{ $errors->first('country') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comGovernorate.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="governorate_name_a">{{ trans('cruds.comGovernorate.fields.governorate_name_a') }}</label>
                <input class="form-control {{ $errors->has('governorate_name_a') ? 'is-invalid' : '' }}" type="text" name="governorate_name_a" id="governorate_name_a" value="{{ old('governorate_name_a', '') }}" required>
                @if($errors->has('governorate_name_a'))
                    <span class="text-danger">{{ $errors->first('governorate_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comGovernorate.fields.governorate_name_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="governorate_name_l">{{ trans('cruds.comGovernorate.fields.governorate_name_l') }}</label>
                <input class="form-control {{ $errors->has('governorate_name_l') ? 'is-invalid' : '' }}" type="text" name="governorate_name_l" id="governorate_name_l" value="{{ old('governorate_name_l', '') }}">
                @if($errors->has('governorate_name_l'))
                    <span class="text-danger">{{ $errors->first('governorate_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comGovernorate.fields.governorate_name_l_helper') }}</span>
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