@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.comDistrict.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.com-districts.update", [$comDistrict->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="city_id">{{ trans('cruds.comDistrict.fields.city') }}</label>
                <select class="form-control select2 {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id" id="city_id" required>
                    @foreach($cities as $id => $entry)
                        <option value="{{ $id }}" {{ (old('city_id') ? old('city_id') : $comDistrict->city->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comDistrict.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="district_name_a">{{ trans('cruds.comDistrict.fields.district_name_a') }}</label>
                <input class="form-control {{ $errors->has('district_name_a') ? 'is-invalid' : '' }}" type="text" name="district_name_a" id="district_name_a" value="{{ old('district_name_a', $comDistrict->district_name_a) }}" required>
                @if($errors->has('district_name_a'))
                    <span class="text-danger">{{ $errors->first('district_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comDistrict.fields.district_name_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="district_name_l">{{ trans('cruds.comDistrict.fields.district_name_l') }}</label>
                <input class="form-control {{ $errors->has('district_name_l') ? 'is-invalid' : '' }}" type="text" name="district_name_l" id="district_name_l" value="{{ old('district_name_l', $comDistrict->district_name_l) }}">
                @if($errors->has('district_name_l'))
                    <span class="text-danger">{{ $errors->first('district_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comDistrict.fields.district_name_l_helper') }}</span>
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