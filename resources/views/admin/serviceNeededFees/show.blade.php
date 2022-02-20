@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.serviceNeededFee.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.service-needed-fees.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.serviceNeededFee.fields.id') }}
                        </th>
                        <td>
                            {{ $serviceNeededFee->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.serviceNeededFee.fields.fee_type') }}
                        </th>
                        <td>
                            {{ $serviceNeededFee->fee_type->fee_type_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.serviceNeededFee.fields.service') }}
                        </th>
                        <td>
                            {{ $serviceNeededFee->service->service_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.serviceNeededFee.fields.is_required') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $serviceNeededFee->is_required ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.serviceNeededFee.fields.notes') }}
                        </th>
                        <td>
                            {{ $serviceNeededFee->notes }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.service-needed-fees.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection