@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.comService.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.com-services.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.comService.fields.id') }}
                        </th>
                        <td>
                            {{ $comService->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comService.fields.service_name_a') }}
                        </th>
                        <td>
                            {{ $comService->service_name_a }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comService.fields.service_name_l') }}
                        </th>
                        <td>
                            {{ $comService->service_name_l }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comService.fields.account') }}
                        </th>
                        <td>
                            {{ $comService->account->account_code ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.com-services.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection