@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.comDistrict.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.com-districts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.comDistrict.fields.id') }}
                        </th>
                        <td>
                            {{ $comDistrict->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comDistrict.fields.city') }}
                        </th>
                        <td>
                            {{ $comDistrict->city->city_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comDistrict.fields.district_name_a') }}
                        </th>
                        <td>
                            {{ $comDistrict->district_name_a }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comDistrict.fields.district_name_l') }}
                        </th>
                        <td>
                            {{ $comDistrict->district_name_l }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.com-districts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection