@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.comCity.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.com-cities.update", [$comCity->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="governorate_id">{{ trans('cruds.comCity.fields.governorate') }}</label>
                <select class="form-control select2 {{ $errors->has('governorate') ? 'is-invalid' : '' }}" name="governorate_id" id="governorate_id" required>
                    @foreach($governorates as $id => $entry)
                        <option value="{{ $id }}" {{ (old('governorate_id') ? old('governorate_id') : $comCity->governorate->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('governorate'))
                    <span class="text-danger">{{ $errors->first('governorate') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comCity.fields.governorate_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="city_name_a">{{ trans('cruds.comCity.fields.city_name_a') }}</label>
                <input class="form-control {{ $errors->has('city_name_a') ? 'is-invalid' : '' }}" type="text" name="city_name_a" id="city_name_a" value="{{ old('city_name_a', $comCity->city_name_a) }}" required>
                @if($errors->has('city_name_a'))
                    <span class="text-danger">{{ $errors->first('city_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comCity.fields.city_name_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="city_name_l">{{ trans('cruds.comCity.fields.city_name_l') }}</label>
                <input class="form-control {{ $errors->has('city_name_l') ? 'is-invalid' : '' }}" type="text" name="city_name_l" id="city_name_l" value="{{ old('city_name_l', $comCity->city_name_l) }}">
                @if($errors->has('city_name_l'))
                    <span class="text-danger">{{ $errors->first('city_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comCity.fields.city_name_l_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="city_name_h">{{ trans('cruds.comCity.fields.city_name_h') }}</label>
                <input class="form-control {{ $errors->has('city_name_h') ? 'is-invalid' : '' }}" type="text" name="city_name_h" id="city_name_h" value="{{ old('city_name_h', $comCity->city_name_h) }}">
                @if($errors->has('city_name_h'))
                    <span class="text-danger">{{ $errors->first('city_name_h') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comCity.fields.city_name_h_helper') }}</span>
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