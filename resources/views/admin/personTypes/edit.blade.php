@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.personType.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.person-types.update", [$personType->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="person_type_name_a">{{ trans('cruds.personType.fields.person_type_name_a') }}</label>
                <input class="form-control {{ $errors->has('person_type_name_a') ? 'is-invalid' : '' }}" type="text" name="person_type_name_a" id="person_type_name_a" value="{{ old('person_type_name_a', $personType->person_type_name_a) }}" required>
                @if($errors->has('person_type_name_a'))
                    <span class="text-danger">{{ $errors->first('person_type_name_a') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.personType.fields.person_type_name_a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="person_type_name_l">{{ trans('cruds.personType.fields.person_type_name_l') }}</label>
                <input class="form-control {{ $errors->has('person_type_name_l') ? 'is-invalid' : '' }}" type="text" name="person_type_name_l" id="person_type_name_l" value="{{ old('person_type_name_l', $personType->person_type_name_l) }}">
                @if($errors->has('person_type_name_l'))
                    <span class="text-danger">{{ $errors->first('person_type_name_l') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.personType.fields.person_type_name_l_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_active" value="0">
                    <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1" {{ $personType->is_active || old('is_active', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_active">{{ trans('cruds.personType.fields.is_active') }}</label>
                </div>
                @if($errors->has('is_active'))
                    <span class="text-danger">{{ $errors->first('is_active') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.personType.fields.is_active_helper') }}</span>
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