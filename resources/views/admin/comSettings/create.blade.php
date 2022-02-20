@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.comSettings.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.crec-settings.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="prefix_folder">{{ trans('cruds.comSettings.fields.prefix_folder') }}</label>
                <input class="form-control {{ $errors->has('prefix_folder') ? 'is-invalid' : '' }}" type="text" name="prefix_folder" id="prefix_folder" value="{{ old('prefix_folder', '') }}" required>
                @if($errors->has('prefix_folder'))
                    <span class="text-danger">{{ $errors->first('prefix_folder') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.comSettings.fields.prefix_folder_helper') }}</span>
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