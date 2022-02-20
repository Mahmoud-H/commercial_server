@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.comGovernorate.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.com-governorates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.comGovernorate.fields.id') }}
                        </th>
                        <td>
                            {{ $comGovernorate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comGovernorate.fields.country') }}
                        </th>
                        <td>
                            {{ $comGovernorate->country->country_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comGovernorate.fields.governorate_name_a') }}
                        </th>
                        <td>
                            {{ $comGovernorate->governorate_name_a }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comGovernorate.fields.governorate_name_l') }}
                        </th>
                        <td>
                            {{ $comGovernorate->governorate_name_l }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.com-governorates.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection