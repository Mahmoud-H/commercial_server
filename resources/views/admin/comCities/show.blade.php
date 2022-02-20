@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.comCity.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.com-cities.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.comCity.fields.id') }}
                        </th>
                        <td>
                            {{ $comCity->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comCity.fields.governorate') }}
                        </th>
                        <td>
                            {{ $comCity->governorate->governorate_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comCity.fields.city_name_a') }}
                        </th>
                        <td>
                            {{ $comCity->city_name_a }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comCity.fields.city_name_l') }}
                        </th>
                        <td>
                            {{ $comCity->city_name_l }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comCity.fields.city_name_h') }}
                        </th>
                        <td>
                            {{ $comCity->city_name_h }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.com-cities.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection