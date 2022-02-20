@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.crecRegFee.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.crec-reg-fees.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegFee.fields.id') }}
                        </th>
                        <td>
                            {{ $crecRegFee->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegFee.fields.crec_reg_request') }}
                        </th>
                        <td>
                            {{ $crecRegFee->crec_reg_request->crec_comp_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegFee.fields.fee_type') }}
                        </th>
                        <td>
                            {{ $crecRegFee->fee_type->fee_type_name_a ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegFee.fields.fee_type_amt') }}
                        </th>
                        <td>
                            {{ $crecRegFee->fee_type_amt }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.crecRegFee.fields.fee_qty') }}
                        </th>
                        <td>
                            {{ $crecRegFee->fee_qty }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.crec-reg-fees.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection