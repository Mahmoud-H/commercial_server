@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.feeType.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.fee-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.feeType.fields.id') }}
                        </th>
                        <td>
                            {{ $feeType->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.feeType.fields.fee_type_name_a') }}
                        </th>
                        <td>
                            {{ $feeType->fee_type_name_a }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.feeType.fields.fee_type_name_l') }}
                        </th>
                        <td>
                            {{ $feeType->fee_type_name_l }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.feeType.fields.fee_class') }}
                        </th>
                        <td>
                            {{ $feeType->fee_class->fee_class_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.feeType.fields.currency') }}
                        </th>
                        <td>
                            {{ $feeType->currency->currency_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.feeType.fields.fee_type_amt') }}
                        </th>
                        <td>
                            {{ $feeType->fee_type_amt }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.feeType.fields.is_active') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $feeType->is_active ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.fee-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection