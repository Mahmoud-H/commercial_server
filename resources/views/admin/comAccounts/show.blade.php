@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.comAccount.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.com-accounts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.comAccount.fields.id') }}
                        </th>
                        <td>
                            {{ $comAccount->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comAccount.fields.account_code') }}
                        </th>
                        <td>
                            {{ $comAccount->account_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comAccount.fields.account_name') }}
                        </th>
                        <td>
                            {{ $comAccount->account_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comAccount.fields.account_address_a') }}
                        </th>
                        <td>
                            {{ $comAccount->account_address_a }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.comAccount.fields.note') }}
                        </th>
                        <td>
                            {{ $comAccount->note }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.com-accounts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection