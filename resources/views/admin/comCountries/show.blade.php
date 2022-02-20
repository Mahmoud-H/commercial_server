@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.comCountry.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.com-countries.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.comCountry.fields.id') }}
                        </th>
                        <td>
                            {{ $comCountry->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comCountry.fields.country_name_a') }}
                        </th>
                        <td>
                            {{ $comCountry->country_name_a }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comCountry.fields.country_name_l') }}
                        </th>
                        <td>
                            {{ $comCountry->country_name_l }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comCountry.fields.iso_3') }}
                        </th>
                        <td>
                            {{ $comCountry->iso_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comCountry.fields.iso_num') }}
                        </th>
                        <td>
                            {{ $comCountry->iso_num }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comCountry.fields.country_tel_prefix') }}
                        </th>
                        <td>
                            {{ $comCountry->country_tel_prefix }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comCountry.fields.nationality_a') }}
                        </th>
                        <td>
                            {{ $comCountry->nationality_a }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comCountry.fields.nationality_l') }}
                        </th>
                        <td>
                            {{ $comCountry->nationality_l }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comCountry.fields.country_is_valid') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $comCountry->country_is_valid ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.com-countries.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection